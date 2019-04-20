<?php

namespace AdminBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;

class AsdkServiceCallAdmin extends AbstractAdmin
{
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('create');
        $collection->remove('edit');
        $collection->remove('delete');
        parent::configureRoutes($collection); // TODO: Change the autogenerated stub
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('servIdByProject')
            ->add('servDescription')
            ->add('servResponsible.uname')
            ->add('servStatus.statName')
            ->add('servVendor.company')
            ->add('servServiceSla.name')
            ->add('servExpiredDate')
            ->add('servCurrentProgress');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('servIdByProject')
            ->add('servDescription', 'html',[
                'truncate' => [
                    'length' => 100
                ]
            ])
            ->add('servResponsible.uname')
            ->add('servStatus.statname')
            ->add('servVendor.company')
            ->add('servServiceSla.name')
            ->add('servExpiredDate')
            ->add('Serv_current_progress')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('servIdByProject')
            ->add('servDescription')
            ->add('servResponsible.uname')
            ->add('servStatus.statname')
            ->add('servVendor.company')
            ->add('servServiceSla.name')
            ->add('servExpiredDate')
            ->add('Serv_current_progress');
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('servIdByProject')
            ->add('servDescription','html')
            ->add('servResponsible.uname')
            ->add('servStatus.statname')
            ->add('servVendor.company')
            ->add('servServiceSla.name')
            ->add('servExpiredDate')
            ->add('Serv_current_progress');
    }
}
