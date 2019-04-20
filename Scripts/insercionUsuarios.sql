insert into Usuario (username_canonical,email_canonical,UsuCodigo,UsuNombre,UsuClave,UsuMail,UsuMobil,UsuPhone,UsuExt,UsuEstado,roles,usunNumeroTelefonica)
select USERNAME,EMAIL,USERNAME,UNAME,'',EMAIL,MOBIL,PHONE1,EXT,1,'a:0:{}',ISNULL(ADU_FIELD1,1111) from Aranda8..usuarios usu
    inner join Aranda8..ADDITIONALDATA_USER Adi on usu.CODUSUARIO=adi.CODUSUARIO
where USERNAME in ('CUrdaneta','JJinete','Hdesk','EUrdaneta','SPinilla','CRamirez')

insert into Usuario (username_canonical,email_canonical,UsuCodigo,UsuNombre,UsuClave,UsuMail,UsuMobil,UsuPhone,UsuExt,UsuEstado,roles,usunNumeroTelefonica)
select USERNAME,EMAIL,USERNAME,UNAME,'',EMAIL,MOBIL,PHONE1,EXT,1,'a:0:{}',ISNULL(ADU_FIELD1,1111) from Aranda8..usuarios usu
    inner join Aranda8..ADDITIONALDATA_USER Adi on usu.CODUSUARIO=adi.CODUSUARIO
where usu.CODUSUARIO >1000
    and USERNAME not in ('CUrdaneta','JJinete','Hdesk','EUrdaneta','SPinilla','CRamirez')