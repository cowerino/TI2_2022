USE [camposdin]
GO
/****** Object:  StoredProcedure [dbo].[Listar_Enlaces]    Script Date: 10/17/2022 1:38:44 AM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
ALTER PROCEDURE [dbo].[Listar_Enlaces]
	@id INT
AS
BEGIN

SELECT * FROM enlaces WHERE enlaces.id_formulario = @id and enlaces.vigencia = 1 and enlaces.visibilidad_campo = 1;

END
