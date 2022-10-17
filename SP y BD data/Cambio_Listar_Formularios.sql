USE [camposdin]
GO
/****** Object:  StoredProcedure [dbo].[Listar_Formularios]    Script Date: 10/17/2022 1:38:58 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
ALTER PROCEDURE [dbo].[Listar_Formularios] 
	@id INT
AS
BEGIN

SELECT * FROM formulario WHERE formulario.id_usuario = @id and vigencia = 1 and borrado = 0

END;
