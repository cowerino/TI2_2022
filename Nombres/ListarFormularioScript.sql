USE [camposdin]
GO
/****** Object:  StoredProcedure [dbo].[Listar_Formularios]    Script Date: 17-10-2022 0:57:42 ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
ALTER PROCEDURE [dbo].[Listar_Formularios] 
	@id INT
AS
BEGIN

SELECT * FROM formulario WHERE formulario.id_usuario = @id;

END
