USE [camposdin]
GO
/****** Object:  StoredProcedure [dbo].[Listar_Usuario]    Script Date: 17-10-2022 0:57:53 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
ALTER PROCEDURE [dbo].[Listar_Usuario] @id INT
AS
BEGIN
    SELECT nombre_usuario, apellido1_usuario FROM usuario WHERE id_usuario = @id
END;
