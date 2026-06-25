USE EmpresaDBA;
GO

ALTER ROLE db_owner
ADD MEMBER Administrador1;
GO

ALTER ROLE db_datareader
ADD MEMBER UsuarioVentas;
GO

ALTER ROLE db_datawriter
ADD MEMBER UsuarioVentas;
GO