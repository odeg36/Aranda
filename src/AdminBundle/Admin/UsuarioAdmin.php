<?php
namespace AdminBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Admin\Pool;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Symfony\Component\Validator\Constraints\NotNull;

class UsuarioAdmin extends AbstractAdmin
{

    protected $em;

    public function setConfigurationPool(Pool $configurationPool)
    {
        parent::setConfigurationPool($configurationPool);
        $this->em = $configurationPool->getContainer()->get("doctrine")->getManager();
    }

    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('usuNombre', null, [
                'label' => 'campo.nombres'
            ])
            ->add('email', null, [
            ])
            ->add('enabled', null, [
                'label' => 'campo.habilitado'
            ])
            ->add('groups', null, [
                'label' => 'campo.grupos'
            ])
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('usuNombre', null, [
                'label' => 'campo.nombres'
            ])
            ->add('email', null, [
            ])
        ;
        if ($this->isGranted('ROLE_SUPER_ADMIN')) {
            $listMapper
                ->add('enabled', null, [
                    'editable' => true,
                    'label' => 'campo.habilitado'
                ])
                ->add('groups', null, [
                    'label' => 'campo.grupos'
                ])
            ;
        }
        $listMapper
            ->add('_action', null, array(
                'label' => 'titulo.acciones',
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
        ));
    }

    /**
     * {@inheritdoc}
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        // define group zoning
        $formMapper
            ->tab('User', ['label' => 'titulo.usuario'])
            ->with('Profile', array('class' => 'col-md-6', 'label' => 'titulo.perfil'))->end()
            ->with('General', array('class' => 'col-md-6', 'label' => 'titulo.general'))->end()
            ->with('Social', array('class' => 'col-md-6', 'label' => 'titulo.redes_sociales'))->end()
            ->end()
            ->tab('Security', ['label' => 'campo.seguridad'])
            ->with('Status', array('class' => 'col-md-4', 'label' => 'titulo.estado'))->end()
            ->with('Groups', array('class' => 'col-md-4', 'label' => 'titulo.grupos'))->end()
            ->with('Roles', array('class' => 'col-md-12', 'label' => 'titulo.roles'))->end()
            ->end()
        ;

        $now = new \DateTime();

        // NEXT_MAJOR: Keep FQCN when bumping Symfony requirement to 2.8+.
        if (method_exists('Symfony\Component\Form\AbstractType', 'getBlockPrefix')) {
            $textType = 'Symfony\Component\Form\Extension\Core\Type\TextType';
            $datePickerType = 'Sonata\CoreBundle\Form\Type\DatePickerType';
            $urlType = 'Symfony\Component\Form\Extension\Core\Type\UrlType';
            $userGenderType = 'Sonata\UserBundle\Form\Type\UserGenderListType';
            $localeType = 'Symfony\Component\Form\Extension\Core\Type\LocaleType';
            $timezoneType = 'Symfony\Component\Form\Extension\Core\Type\TimezoneType';
            $modelType = 'Sonata\AdminBundle\Form\Type\ModelType';
            $securityRolesType = 'Sonata\UserBundle\Form\Type\SecurityRolesType';
        } else {
            $textType = 'text';
            $datePickerType = 'sonata_type_date_picker';
            $urlType = 'url';
            $userGenderType = 'sonata_user_gender';
            $localeType = 'locale';
            $timezoneType = 'timezone';
            $modelType = 'sonata_type_model';
            $securityRolesType = 'sonata_security_roles';
        }

        $formMapper
            ->tab('User')
            ->with('General')
            ->add('username', null, [
                'label' => 'campo.username',
                'constraints' => [
                    new NotNull()
                ]
            ])
            ->add('email')
            ->add('plainPassword', $textType, array(
                'required' => (!$this->getSubject() || is_null($this->getSubject()->getId())),
                'label' => 'campo.contrasena'
            ))
            ->end()
            ->with('Profile')
            ->add('dateOfBirth', $datePickerType, array(
                'years' => range(1900, $now->format('Y')),
                'dp_min_date' => '1-1-1900',
                'dp_max_date' => $now->format('c'),
                'required' => false,
                'label' => 'campo.fecha_nacimiento'
            ))
            ->add('usuNombre', null, array('required' => false,
                'label' => 'campo.nombres'))
            ->add('usuMobil', null, array('required' => false,
                'label' => 'campo.mobil'))
            ->add('usuPhone', null, array('required' => false,
                'label' => 'campo.telefono'))
            ->end()
            ->end()
            ->tab('Security')
            ->with('Status')
            ->add('enabled', null, array('required' => false,
                'label' => 'campo.habilitado'))
            ->end()
            ->with('Groups')
            ->add('groups', $modelType, array(
                'label' => 'campo.grupos',
                'required' => false,
                'expanded' => true,
                'multiple' => true,
            ))
            ->end()
            ->with('Roles')
            ->add('realRoles', $securityRolesType, array(
                'label' => 'campo.roles',
                'expanded' => true,
                'multiple' => true,
                'required' => false,
            ))
            ->end()
            ->end()
        ;
    }

    /**
     * {@inheritdoc}
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
        ;
    }
}
