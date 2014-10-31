/*
Navicat PGSQL Data Transfer

Source Server         : postgresql
Source Server Version : 90305
Source Host           : 127.0.0.1:5432
Source Database       : apoyotis_whs
Source Schema         : public

Target Server Type    : PGSQL
Target Server Version : 90305
File Encoding         : 65001

Date: 2014-10-31 10:28:32
*/


-- ----------------------------
-- Sequence structure for "public"."app_codapp_seq"
-- ----------------------------
DROP SEQUENCE "public"."app_codapp_seq";
CREATE SEQUENCE "public"."app_codapp_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."calendario_codcalendario_seq"
-- ----------------------------
DROP SEQUENCE "public"."calendario_codcalendario_seq";
CREATE SEQUENCE "public"."calendario_codcalendario_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."cons_actividad_codcons_actividad_seq"
-- ----------------------------
DROP SEQUENCE "public"."cons_actividad_codcons_actividad_seq";
CREATE SEQUENCE "public"."cons_actividad_codcons_actividad_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."cons_documento_idcons_documento_seq"
-- ----------------------------
DROP SEQUENCE "public"."cons_documento_idcons_documento_seq";
CREATE SEQUENCE "public"."cons_documento_idcons_documento_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 10
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."consultor_idconsultor_seq"
-- ----------------------------
DROP SEQUENCE "public"."consultor_idconsultor_seq";
CREATE SEQUENCE "public"."consultor_idconsultor_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 12
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."criterio_id_criterio_seq"
-- ----------------------------
DROP SEQUENCE "public"."criterio_id_criterio_seq";
CREATE SEQUENCE "public"."criterio_id_criterio_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."detalle_cons_iddetalle_cons_seq"
-- ----------------------------
DROP SEQUENCE "public"."detalle_cons_iddetalle_cons_seq";
CREATE SEQUENCE "public"."detalle_cons_iddetalle_cons_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."detalle_criterio_iddetalle_criterio_seq"
-- ----------------------------
DROP SEQUENCE "public"."detalle_criterio_iddetalle_criterio_seq";
CREATE SEQUENCE "public"."detalle_criterio_iddetalle_criterio_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."detalle_ge_iddetalle_ge_seq"
-- ----------------------------
DROP SEQUENCE "public"."detalle_ge_iddetalle_ge_seq";
CREATE SEQUENCE "public"."detalle_ge_iddetalle_ge_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."documentospublicos_codpublico_seq"
-- ----------------------------
DROP SEQUENCE "public"."documentospublicos_codpublico_seq";
CREATE SEQUENCE "public"."documentospublicos_codpublico_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."evaluacion_final_codevaluacion_final_seq"
-- ----------------------------
DROP SEQUENCE "public"."evaluacion_final_codevaluacion_final_seq";
CREATE SEQUENCE "public"."evaluacion_final_codevaluacion_final_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."evaluacion_semanal_codevaluacion_semanal_seq"
-- ----------------------------
DROP SEQUENCE "public"."evaluacion_semanal_codevaluacion_semanal_seq";
CREATE SEQUENCE "public"."evaluacion_semanal_codevaluacion_semanal_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."foro_codforo_seq"
-- ----------------------------
DROP SEQUENCE "public"."foro_codforo_seq";
CREATE SEQUENCE "public"."foro_codforo_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."funcion_app_codfuncion_app_seq"
-- ----------------------------
DROP SEQUENCE "public"."funcion_app_codfuncion_app_seq";
CREATE SEQUENCE "public"."funcion_app_codfuncion_app_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."funcion_codfuncion_seq"
-- ----------------------------
DROP SEQUENCE "public"."funcion_codfuncion_seq";
CREATE SEQUENCE "public"."funcion_codfuncion_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."ge_documento_idge_documento_seq"
-- ----------------------------
DROP SEQUENCE "public"."ge_documento_idge_documento_seq";
CREATE SEQUENCE "public"."ge_documento_idge_documento_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 4
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."grupo_empresa_codgrupo_empresa_seq"
-- ----------------------------
DROP SEQUENCE "public"."grupo_empresa_codgrupo_empresa_seq";
CREATE SEQUENCE "public"."grupo_empresa_codgrupo_empresa_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 17
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."pago_consultor_codpago_consultor_seq"
-- ----------------------------
DROP SEQUENCE "public"."pago_consultor_codpago_consultor_seq";
CREATE SEQUENCE "public"."pago_consultor_codpago_consultor_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."plandepagos_codplandepagos_seq"
-- ----------------------------
DROP SEQUENCE "public"."plandepagos_codplandepagos_seq";
CREATE SEQUENCE "public"."plandepagos_codplandepagos_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."planpago_entregables_codplanpago_entregables_seq"
-- ----------------------------
DROP SEQUENCE "public"."planpago_entregables_codplanpago_entregables_seq";
CREATE SEQUENCE "public"."planpago_entregables_codplanpago_entregables_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."propuestapago_codpropuestapago_seq"
-- ----------------------------
DROP SEQUENCE "public"."propuestapago_codpropuestapago_seq";
CREATE SEQUENCE "public"."propuestapago_codpropuestapago_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."registro_evaluacion_final_idregistro_evaluacion_final_seq"
-- ----------------------------
DROP SEQUENCE "public"."registro_evaluacion_final_idregistro_evaluacion_final_seq";
CREATE SEQUENCE "public"."registro_evaluacion_final_idregistro_evaluacion_final_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."repuesta_actividad_codrepuesta_actividad_seq"
-- ----------------------------
DROP SEQUENCE "public"."repuesta_actividad_codrepuesta_actividad_seq";
CREATE SEQUENCE "public"."repuesta_actividad_codrepuesta_actividad_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."rol_codrol_seq"
-- ----------------------------
DROP SEQUENCE "public"."rol_codrol_seq";
CREATE SEQUENCE "public"."rol_codrol_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 84
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."rol_funcion_codrol_funcion_seq"
-- ----------------------------
DROP SEQUENCE "public"."rol_funcion_codrol_funcion_seq";
CREATE SEQUENCE "public"."rol_funcion_codrol_funcion_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."socio_idsocio_seq"
-- ----------------------------
DROP SEQUENCE "public"."socio_idsocio_seq";
CREATE SEQUENCE "public"."socio_idsocio_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 4
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."telf_ge_idtelf_ge_seq"
-- ----------------------------
DROP SEQUENCE "public"."telf_ge_idtelf_ge_seq";
CREATE SEQUENCE "public"."telf_ge_idtelf_ge_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."test_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."test_id_seq";
CREATE SEQUENCE "public"."test_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."tipo_criterio_id_tipo_seq"
-- ----------------------------
DROP SEQUENCE "public"."tipo_criterio_id_tipo_seq";
CREATE SEQUENCE "public"."tipo_criterio_id_tipo_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 4
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."tipo_socio_codtipo_socio_seq"
-- ----------------------------
DROP SEQUENCE "public"."tipo_socio_codtipo_socio_seq";
CREATE SEQUENCE "public"."tipo_socio_codtipo_socio_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 22
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."user_rol_coduser_rol_seq"
-- ----------------------------
DROP SEQUENCE "public"."user_rol_coduser_rol_seq";
CREATE SEQUENCE "public"."user_rol_coduser_rol_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 74
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."usuario_idusuario_seq"
-- ----------------------------
DROP SEQUENCE "public"."usuario_idusuario_seq";
CREATE SEQUENCE "public"."usuario_idusuario_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 84
 CACHE 1;

-- ----------------------------
-- Table structure for "public"."app"
-- ----------------------------
DROP TABLE "public"."app";
CREATE TABLE "public"."app" (
"codapp" int4 DEFAULT nextval('app_codapp_seq'::regclass) NOT NULL,
"nombreapp" varchar(45)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of app
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."calendario"
-- ----------------------------
DROP TABLE "public"."calendario";
CREATE TABLE "public"."calendario" (
"codcalendario" int4 DEFAULT nextval('calendario_codcalendario_seq'::regclass) NOT NULL,
"grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"grupo_empresa_usuario_idusuario" int4 NOT NULL,
"dia_reunion_fijado" bool DEFAULT false
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of calendario
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."cons_actividad"
-- ----------------------------
DROP TABLE "public"."cons_actividad";
CREATE TABLE "public"."cons_actividad" (
"codcons_actividad" int4 DEFAULT nextval('cons_actividad_codcons_actividad_seq'::regclass) NOT NULL,
"consultor_usuario_idusuario" int4 NOT NULL,
"consultor_idconsultor" int4 NOT NULL,
"visiblepara" varchar(30),
"requiererespuesta" varchar(15),
"fechainicio" date,
"fechafin" date,
"horainicio" time(6),
"horafin" time(6),
"titulo" varchar(30),
"descripcion" text,
"contestada" bool,
"ruta" text,
"archivo" varchar(120)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of cons_actividad
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."cons_documento"
-- ----------------------------
DROP TABLE "public"."cons_documento";
CREATE TABLE "public"."cons_documento" (
"idcons_documento" int4 DEFAULT nextval('cons_documento_idcons_documento_seq'::regclass) NOT NULL,
"consultor_usuario_idusuario" int4 NOT NULL,
"consultor_idconsultor" int4 NOT NULL,
"nombredocumento" varchar(45),
"titulo_consdocumento" varchar(45),
"descripcionconsultordocumento" text,
"pathdocumentoconsultor" text,
"created_at" timestamp(6),
"updated_at" timestamp(6)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of cons_documento
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."consultor"
-- ----------------------------
DROP TABLE "public"."consultor";
CREATE TABLE "public"."consultor" (
"idconsultor" int4 DEFAULT nextval('consultor_idconsultor_seq'::regclass) NOT NULL,
"usuario_idusuario" int4 NOT NULL,
"nombreconsultor" varchar(45),
"correoconsultor" varchar(45),
"telefonoconsultor" int4 NOT NULL,
"apellidopaternoconsultor" varchar(45),
"apellidomaternoconsultor" varchar(45),
"fotoconsultor" varchar(128)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of consultor
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."consultor_proyecto_grupo_empresa"
-- ----------------------------
DROP TABLE "public"."consultor_proyecto_grupo_empresa";
CREATE TABLE "public"."consultor_proyecto_grupo_empresa" (
"consultor_usuario_idusuario" int4 NOT NULL,
"consultor_idconsultor" int4 NOT NULL,
"grupo_empresa_usuario_idusuario" int4 NOT NULL,
"grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"proyecto_codproyecto" varchar(25) NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of consultor_proyecto_grupo_empresa
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."criterio"
-- ----------------------------
DROP TABLE "public"."criterio";
CREATE TABLE "public"."criterio" (
"id_criterio" int4 DEFAULT nextval('criterio_id_criterio_seq'::regclass) NOT NULL,
"tipo_criterio_id_tipo" int4 NOT NULL,
"registro_evaluacion_final_proyecto_codproyecto" varchar(25) NOT NULL,
"registro_evaluacion_final_consultor_idconsultor" int4 NOT NULL,
"registro_evaluacion_final_consultor_usuario_idusuario" int4 NOT NULL,
"registro_evaluacion_final_idregistro_evaluacion_final" int4 NOT NULL,
"nombre" varchar(100),
"porcentaje_calificacion" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of criterio
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."detalle_cons"
-- ----------------------------
DROP TABLE "public"."detalle_cons";
CREATE TABLE "public"."detalle_cons" (
"iddetalle_cons" int4 DEFAULT nextval('detalle_cons_iddetalle_cons_seq'::regclass) NOT NULL,
"consultor_idconsultor" int4 NOT NULL,
"detalle_ge_evaluacion_semanal_codevaluacion_semanal" int4 NOT NULL,
"detalle_ge_evaluacion_semanal_calendario_codcalendario" int4 NOT NULL,
"detalle_ge_evaluacion_semanal_calendario_grupo_empresa_codgrupo" int4 NOT NULL,
"detalle_ge_evaluacion_semanal_calendario_grupo_empresa_usuario_" int4 NOT NULL,
"detalle_ge_iddetalle_ge" int4 NOT NULL,
"realizado" text,
"observaciones" text,
"detalle_esperado" text
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of detalle_cons
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."detalle_criterio"
-- ----------------------------
DROP TABLE "public"."detalle_criterio";
CREATE TABLE "public"."detalle_criterio" (
"iddetalle_criterio" int4 DEFAULT nextval('detalle_criterio_iddetalle_criterio_seq'::regclass) NOT NULL,
"criterio_registro_evaluacion_final_idregistro_evaluacion_final" int4 NOT NULL,
"criterio_registro_evaluacion_final_consultor_usuario_idusuario" int4 NOT NULL,
"criterio_registro_evaluacion_final_consultor_idconsultor" int4 NOT NULL,
"criterio_registro_evaluacion_final_proyecto_codproyecto" varchar(25) NOT NULL,
"criterio_tipo_criterio_id_tipo" int4 NOT NULL,
"criterio_id_criterio" int4 NOT NULL,
"porcentaje" int4,
"nombre_concepto" varchar(30)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of detalle_criterio
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."detalle_ge"
-- ----------------------------
DROP TABLE "public"."detalle_ge";
CREATE TABLE "public"."detalle_ge" (
"iddetalle_ge" int4 DEFAULT nextval('detalle_ge_iddetalle_ge_seq'::regclass) NOT NULL,
"evaluacion_semanal_calendario_grupo_empresa_usuario_idusuario" int4 NOT NULL,
"evaluacion_semanal_calendario_grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"evaluacion_semanal_calendario_codcalendario" int4 NOT NULL,
"evaluacion_semanal_codevaluacion_semanal" int4 NOT NULL,
"rol" varchar(120),
"esperado" varchar(120)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of detalle_ge
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."documentospublicos"
-- ----------------------------
DROP TABLE "public"."documentospublicos";
CREATE TABLE "public"."documentospublicos" (
"codpublico" int4 DEFAULT nextval('documentospublicos_codpublico_seq'::regclass) NOT NULL,
"titulodocumento" varchar(45),
"descdocpublico" varchar(45),
"nombredocupublico" varchar(300),
"rutadocpublico" varchar(300)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of documentospublicos
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."entregables"
-- ----------------------------
DROP TABLE "public"."entregables";
CREATE TABLE "public"."entregables" (
"codentregables" int4 NOT NULL,
"hito_pagable_plan_pago_calendario_grupo_empresa_usuario_idusuar" int4 NOT NULL,
"hito_pagable_plan_pago_calendario_grupo_empresa_codgrupo_empres" int4 NOT NULL,
"hito_pagable_plan_pago_calendario_codcalendario" int4 NOT NULL,
"hito_pagable_plan_pago_codplan_pago" int4 NOT NULL,
"hito_pagable_codhito_pagable" int4 NOT NULL,
"entregable" varchar(120)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of entregables
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."evaluacion_final"
-- ----------------------------
DROP TABLE "public"."evaluacion_final";
CREATE TABLE "public"."evaluacion_final" (
"codevaluacion_final" int4 DEFAULT nextval('evaluacion_final_codevaluacion_final_seq'::regclass) NOT NULL,
"grupo_empresa_usuario_idusuario" int4 NOT NULL,
"grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"detalle_criterio_criterio_id_criterio" int4 NOT NULL,
"detalle_criterio_criterio_tipo_criterio_id_tipo" int4 NOT NULL,
"detalle_criterio_criterio_registro_evaluacion_final_proyecto_co" varchar(25) NOT NULL,
"detalle_criterio_criterio_registro_evaluacion_final_consultor_i" int4 NOT NULL,
"detalle_criterio_criterio_registro_evaluacion_final_consultor_u" int4 NOT NULL,
"detalle_criterio_criterio_registro_evaluacion_final_idregistro_" int4 NOT NULL,
"detalle_criterio_iddetalle_criterio" int4 NOT NULL,
"fecha" date,
"nota" int4,
"observaciones" text
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of evaluacion_final
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."evaluacion_semanal"
-- ----------------------------
DROP TABLE "public"."evaluacion_semanal";
CREATE TABLE "public"."evaluacion_semanal" (
"codevaluacion_semanal" int4 DEFAULT nextval('evaluacion_semanal_codevaluacion_semanal_seq'::regclass) NOT NULL,
"calendario_codcalendario" int4 NOT NULL,
"calendario_grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"calendario_grupo_empresa_usuario_idusuario" int4 NOT NULL,
"fecha" date
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of evaluacion_semanal
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."foro"
-- ----------------------------
DROP TABLE "public"."foro";
CREATE TABLE "public"."foro" (
"codforo" int4 DEFAULT nextval('foro_codforo_seq'::regclass) NOT NULL,
"autor" varchar(60),
"titulo" varchar(120),
"mensaje" text,
"cantidad_comentarios" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of foro
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."funcion"
-- ----------------------------
DROP TABLE "public"."funcion";
CREATE TABLE "public"."funcion" (
"codfuncion" int4 DEFAULT nextval('funcion_codfuncion_seq'::regclass) NOT NULL,
"tipofuncion" varchar(45)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of funcion
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."funcion_app"
-- ----------------------------
DROP TABLE "public"."funcion_app";
CREATE TABLE "public"."funcion_app" (
"codfuncion_app" int4 DEFAULT nextval('funcion_app_codfuncion_app_seq'::regclass) NOT NULL,
"app_codapp" int4 NOT NULL,
"funcion_codfuncion" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of funcion_app
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."ge_documento"
-- ----------------------------
DROP TABLE "public"."ge_documento";
CREATE TABLE "public"."ge_documento" (
"idge_documento" int4 DEFAULT nextval('ge_documento_idge_documento_seq'::regclass) NOT NULL,
"grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"grupo_empresa_usuario_idusuario" int4 NOT NULL,
"nombredocumento" varchar(45),
"pathdocumentoge" text,
"titulo_gedocumento" varchar(45),
"descripciongedocumento" text,
"created_at" timestamp(6),
"updated_at" timestamp(6)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of ge_documento
-- ----------------------------
INSERT INTO "public"."ge_documento" VALUES ('3', '17', '84', 'michel_cv.pdf', '/docs_grupoempresa/84/michel_cv.pdf', 'contrato', 'aasdasdasdasd', '2014-10-31 14:15:12', '2014-10-31 14:15:12');
INSERT INTO "public"."ge_documento" VALUES ('4', '17', '84', 'ubaldino_cv.pdf', '/docs_grupoempresa/84/ubaldino_cv.pdf', 'sasdas', 'sdasd', '2014-10-31 14:18:02', '2014-10-31 14:18:02');

-- ----------------------------
-- Table structure for "public"."grupo_empresa"
-- ----------------------------
DROP TABLE "public"."grupo_empresa";
CREATE TABLE "public"."grupo_empresa" (
"codgrupo_empresa" int4 DEFAULT nextval('grupo_empresa_codgrupo_empresa_seq'::regclass) NOT NULL,
"usuario_idusuario" int4 NOT NULL,
"nombrelargoge" varchar(45),
"nombrecortoge" varchar(45) NOT NULL,
"correoge" varchar(45) NOT NULL,
"direccionge" varchar(45) NOT NULL,
"telefonoge" int4 NOT NULL,
"logoge" varchar(100)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of grupo_empresa
-- ----------------------------
INSERT INTO "public"."grupo_empresa" VALUES ('17', '84', 'work at home soft', 'WHS SRL', 'workathome@gmail.com', 'av. los venitos', '63947268', '/srv/http/apoyotis/public/img/logo_grupo_empresas/20141031141330_erikc.jpg');

-- ----------------------------
-- Table structure for "public"."hito_pagable"
-- ----------------------------
DROP TABLE "public"."hito_pagable";
CREATE TABLE "public"."hito_pagable" (
"codhito_pagable" int4 NOT NULL,
"plan_pago_codplan_pago" int4 NOT NULL,
"plan_pago_calendario_codcalendario" int4 NOT NULL,
"plan_pago_calendario_grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"plan_pago_calendario_grupo_empresa_usuario_idusuario" int4 NOT NULL,
"hitoevento" varchar(120),
"porcentajepago" int4,
"monto" float4,
"fechapago" date
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of hito_pagable
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."migrations"
-- ----------------------------
DROP TABLE "public"."migrations";
CREATE TABLE "public"."migrations" (
"migration" varchar(255) NOT NULL,
"batch" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO "public"."migrations" VALUES ('2014_10_17_004707_create_test_table', '1');

-- ----------------------------
-- Table structure for "public"."pago_consultor"
-- ----------------------------
DROP TABLE "public"."pago_consultor";
CREATE TABLE "public"."pago_consultor" (
"codpago_consultor" int4 DEFAULT nextval('pago_consultor_codpago_consultor_seq'::regclass) NOT NULL,
"consultor_idconsultor" int4 NOT NULL,
"consultor_usuario_idusuario" int4 NOT NULL,
"hito_pagable_plan_pago_codplan_pago" int4 NOT NULL,
"hito_pagable_codhito_pagable" int4 NOT NULL,
"hito_pagable_plan_pago_calendario_grupo_empresa_usuario_idusuar" int4 NOT NULL,
"hito_pagable_plan_pago_calendario_grupo_empresa_codgrupo_empres" int4 NOT NULL,
"hito_pagable_plan_pago_calendario_codcalendario" int4 NOT NULL,
"hitooevento" varchar(120),
"porcentajesatisfaccion" int4,
"porcentajealcazado" int4,
"montopago" float4,
"estadopago" varchar(45)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of pago_consultor
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."plan_pago"
-- ----------------------------
DROP TABLE "public"."plan_pago";
CREATE TABLE "public"."plan_pago" (
"codplan_pago" int4 NOT NULL,
"calendario_codcalendario" int4 NOT NULL,
"calendario_grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"calendario_grupo_empresa_usuario_idusuario" int4 NOT NULL,
"montototal" float4,
"porcentajesatisfaccion" float4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of plan_pago
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."plandepagos"
-- ----------------------------
DROP TABLE "public"."plandepagos";
CREATE TABLE "public"."plandepagos" (
"codplandepagos" int4 DEFAULT nextval('plandepagos_codplandepagos_seq'::regclass) NOT NULL,
"propuestapago_grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"propuestapago_grupo_empresa_usuario_idusuario" int4 NOT NULL,
"propuestapago_codpropuestapago" int4 NOT NULL,
"hitoevento" varchar(60),
"porcentajepago" int4,
"montopago" float4,
"fechapago" date
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of plandepagos
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."planpago_entregables"
-- ----------------------------
DROP TABLE "public"."planpago_entregables";
CREATE TABLE "public"."planpago_entregables" (
"codplanpago_entregables" int4 DEFAULT nextval('planpago_entregables_codplanpago_entregables_seq'::regclass) NOT NULL,
"plandepagos_propuestapago_codpropuestapago" int4 NOT NULL,
"plandepagos_propuestapago_grupo_empresa_usuario_idusuario" int4 NOT NULL,
"plandepagos_propuestapago_grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"plandepagos_codplandepagos" int4 NOT NULL,
"entregable" varchar(120)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of planpago_entregables
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."propuestapago"
-- ----------------------------
DROP TABLE "public"."propuestapago";
CREATE TABLE "public"."propuestapago" (
"codpropuestapago" int4 DEFAULT nextval('propuestapago_codpropuestapago_seq'::regclass) NOT NULL,
"grupo_empresa_usuario_idusuario" int4 NOT NULL,
"grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"montototal" float4,
"porcentajesatisfaccion" int4,
"estado" bool,
"estadoregistro" bool
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of propuestapago
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."proyecto"
-- ----------------------------
DROP TABLE "public"."proyecto";
CREATE TABLE "public"."proyecto" (
"codproyecto" varchar(25) NOT NULL,
"nombreproyecto" varchar(60),
"fechafinproyecto" date,
"vigente" bool
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of proyecto
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."registro_evaluacion_final"
-- ----------------------------
DROP TABLE "public"."registro_evaluacion_final";
CREATE TABLE "public"."registro_evaluacion_final" (
"idregistro_evaluacion_final" int4 DEFAULT nextval('registro_evaluacion_final_idregistro_evaluacion_final_seq'::regclass) NOT NULL,
"consultor_usuario_idusuario" int4 NOT NULL,
"consultor_idconsultor" int4 NOT NULL,
"proyecto_codproyecto" varchar(25) NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of registro_evaluacion_final
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."registros"
-- ----------------------------
DROP TABLE "public"."registros";
CREATE TABLE "public"."registros" (
"codhito" int4 NOT NULL,
"codentregable" int4 NOT NULL,
"entregable" varchar(120)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of registros
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."repuesta_actividad"
-- ----------------------------
DROP TABLE "public"."repuesta_actividad";
CREATE TABLE "public"."repuesta_actividad" (
"codrepuesta_actividad" int4 DEFAULT nextval('repuesta_actividad_codrepuesta_actividad_seq'::regclass) NOT NULL,
"cons_actividad_consultor_idconsultor" int4 NOT NULL,
"cons_actividad_consultor_usuario_idusuario" int4 NOT NULL,
"cons_actividad_codcons_actividad" int4 NOT NULL,
"ge_documento_grupo_empresa_usuario_idusuario" int4 NOT NULL,
"ge_documento_grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"ge_documento_idge_documento" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of repuesta_actividad
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."rol"
-- ----------------------------
DROP TABLE "public"."rol";
CREATE TABLE "public"."rol" (
"codrol" int4 DEFAULT nextval('rol_codrol_seq'::regclass) NOT NULL,
"tiporol" varchar(45)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of rol
-- ----------------------------
INSERT INTO "public"."rol" VALUES ('81', 'administrador');
INSERT INTO "public"."rol" VALUES ('82', 'consultor');
INSERT INTO "public"."rol" VALUES ('83', 'grupo-empresa');
INSERT INTO "public"."rol" VALUES ('84', 'otro');

-- ----------------------------
-- Table structure for "public"."rol_funcion"
-- ----------------------------
DROP TABLE "public"."rol_funcion";
CREATE TABLE "public"."rol_funcion" (
"codrol_funcion" int4 DEFAULT nextval('rol_funcion_codrol_funcion_seq'::regclass) NOT NULL,
"rol_codrol" int4 NOT NULL,
"funcion_codfuncion" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of rol_funcion
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."socio"
-- ----------------------------
DROP TABLE "public"."socio";
CREATE TABLE "public"."socio" (
"idsocio" int4 DEFAULT nextval('socio_idsocio_seq'::regclass) NOT NULL,
"grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"tipo_socio_codtipo_socio" int4 NOT NULL,
"grupo_empresa_usuario_idusuario" int4 NOT NULL,
"nombresocio" varchar(45),
"apellidossocio" varchar(45),
"estadocivil" varchar(25),
"direccion" varchar(45),
"cargo" varchar(45),
"correoelectronicosocio" varchar(50),
"telefonosocio" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of socio
-- ----------------------------
INSERT INTO "public"."socio" VALUES ('4', '17', '21', '84', 'ssadas', 'asdas', 'asdas', 'asdas', 'dasdas', 'dasdas', '232131231');

-- ----------------------------
-- Table structure for "public"."telf_ge"
-- ----------------------------
DROP TABLE "public"."telf_ge";
CREATE TABLE "public"."telf_ge" (
"idtelf_ge" int4 DEFAULT nextval('telf_ge_idtelf_ge_seq'::regclass) NOT NULL,
"grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"grupo_empresa_usuario_idusuario" int4 NOT NULL,
"numerotelf" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of telf_ge
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."test"
-- ----------------------------
DROP TABLE "public"."test";
CREATE TABLE "public"."test" (
"id" int4 DEFAULT nextval('test_id_seq'::regclass) NOT NULL,
"usu_rol" int4,
"created_at" timestamp(6) NOT NULL,
"updated_at" timestamp(6) NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of test
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."tipo_criterio"
-- ----------------------------
DROP TABLE "public"."tipo_criterio";
CREATE TABLE "public"."tipo_criterio" (
"id_tipo" int4 DEFAULT nextval('tipo_criterio_id_tipo_seq'::regclass) NOT NULL,
"tipo" varchar(17)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of tipo_criterio
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."tipo_socio"
-- ----------------------------
DROP TABLE "public"."tipo_socio";
CREATE TABLE "public"."tipo_socio" (
"codtipo_socio" int4 DEFAULT nextval('tipo_socio_codtipo_socio_seq'::regclass) NOT NULL,
"nombretipo" varchar(45)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of tipo_socio
-- ----------------------------
INSERT INTO "public"."tipo_socio" VALUES ('21', 'socio');
INSERT INTO "public"."tipo_socio" VALUES ('22', 'representante legal');

-- ----------------------------
-- Table structure for "public"."user_rol"
-- ----------------------------
DROP TABLE "public"."user_rol";
CREATE TABLE "public"."user_rol" (
"coduser_rol" int4 DEFAULT nextval('user_rol_coduser_rol_seq'::regclass) NOT NULL,
"usuario_idusuario" int4 NOT NULL,
"rol_codrol" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of user_rol
-- ----------------------------
INSERT INTO "public"."user_rol" VALUES ('73', '83', '81');
INSERT INTO "public"."user_rol" VALUES ('74', '84', '83');

-- ----------------------------
-- Table structure for "public"."usuario"
-- ----------------------------
DROP TABLE "public"."usuario";
CREATE TABLE "public"."usuario" (
"idusuario" int4 DEFAULT nextval('usuario_idusuario_seq'::regclass) NOT NULL,
"login" varchar(45),
"password" varchar(255),
"habilitada" bool NOT NULL,
"remember_token" varchar(100)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO "public"."usuario" VALUES ('83', 'admin', '$2y$10$Dac9oRoBORZDQDEGe50v0OVBdO71HET3pcUstP.RwcOeLGNhPec7K', 't', null);
INSERT INTO "public"."usuario" VALUES ('84', 'workathome', '$2y$10$XORXAPozNQVN/p./C324peznc411TXo/VTyhu.8HTRvEZ7i6VUAzW', 't', null);

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------
ALTER SEQUENCE "public"."app_codapp_seq" OWNED BY "app"."codapp";
ALTER SEQUENCE "public"."calendario_codcalendario_seq" OWNED BY "calendario"."codcalendario";
ALTER SEQUENCE "public"."cons_actividad_codcons_actividad_seq" OWNED BY "cons_actividad"."codcons_actividad";
ALTER SEQUENCE "public"."cons_documento_idcons_documento_seq" OWNED BY "cons_documento"."idcons_documento";
ALTER SEQUENCE "public"."consultor_idconsultor_seq" OWNED BY "consultor"."idconsultor";
ALTER SEQUENCE "public"."criterio_id_criterio_seq" OWNED BY "criterio"."id_criterio";
ALTER SEQUENCE "public"."detalle_cons_iddetalle_cons_seq" OWNED BY "detalle_cons"."iddetalle_cons";
ALTER SEQUENCE "public"."detalle_criterio_iddetalle_criterio_seq" OWNED BY "detalle_criterio"."iddetalle_criterio";
ALTER SEQUENCE "public"."detalle_ge_iddetalle_ge_seq" OWNED BY "detalle_ge"."iddetalle_ge";
ALTER SEQUENCE "public"."documentospublicos_codpublico_seq" OWNED BY "documentospublicos"."codpublico";
ALTER SEQUENCE "public"."evaluacion_final_codevaluacion_final_seq" OWNED BY "evaluacion_final"."codevaluacion_final";
ALTER SEQUENCE "public"."evaluacion_semanal_codevaluacion_semanal_seq" OWNED BY "evaluacion_semanal"."codevaluacion_semanal";
ALTER SEQUENCE "public"."foro_codforo_seq" OWNED BY "foro"."codforo";
ALTER SEQUENCE "public"."funcion_app_codfuncion_app_seq" OWNED BY "funcion_app"."codfuncion_app";
ALTER SEQUENCE "public"."funcion_codfuncion_seq" OWNED BY "funcion"."codfuncion";
ALTER SEQUENCE "public"."ge_documento_idge_documento_seq" OWNED BY "ge_documento"."idge_documento";
ALTER SEQUENCE "public"."grupo_empresa_codgrupo_empresa_seq" OWNED BY "grupo_empresa"."codgrupo_empresa";
ALTER SEQUENCE "public"."pago_consultor_codpago_consultor_seq" OWNED BY "pago_consultor"."codpago_consultor";
ALTER SEQUENCE "public"."plandepagos_codplandepagos_seq" OWNED BY "plandepagos"."codplandepagos";
ALTER SEQUENCE "public"."planpago_entregables_codplanpago_entregables_seq" OWNED BY "planpago_entregables"."codplanpago_entregables";
ALTER SEQUENCE "public"."propuestapago_codpropuestapago_seq" OWNED BY "propuestapago"."codpropuestapago";
ALTER SEQUENCE "public"."registro_evaluacion_final_idregistro_evaluacion_final_seq" OWNED BY "registro_evaluacion_final"."idregistro_evaluacion_final";
ALTER SEQUENCE "public"."repuesta_actividad_codrepuesta_actividad_seq" OWNED BY "repuesta_actividad"."codrepuesta_actividad";
ALTER SEQUENCE "public"."rol_codrol_seq" OWNED BY "rol"."codrol";
ALTER SEQUENCE "public"."rol_funcion_codrol_funcion_seq" OWNED BY "rol_funcion"."codrol_funcion";
ALTER SEQUENCE "public"."socio_idsocio_seq" OWNED BY "socio"."idsocio";
ALTER SEQUENCE "public"."telf_ge_idtelf_ge_seq" OWNED BY "telf_ge"."idtelf_ge";
ALTER SEQUENCE "public"."test_id_seq" OWNED BY "test"."id";
ALTER SEQUENCE "public"."tipo_criterio_id_tipo_seq" OWNED BY "tipo_criterio"."id_tipo";
ALTER SEQUENCE "public"."tipo_socio_codtipo_socio_seq" OWNED BY "tipo_socio"."codtipo_socio";
ALTER SEQUENCE "public"."user_rol_coduser_rol_seq" OWNED BY "user_rol"."coduser_rol";
ALTER SEQUENCE "public"."usuario_idusuario_seq" OWNED BY "usuario"."idusuario";

-- ----------------------------
-- Primary Key structure for table "public"."app"
-- ----------------------------
ALTER TABLE "public"."app" ADD PRIMARY KEY ("codapp");

-- ----------------------------
-- Primary Key structure for table "public"."calendario"
-- ----------------------------
ALTER TABLE "public"."calendario" ADD PRIMARY KEY ("codcalendario", "grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "public"."cons_actividad"
-- ----------------------------
ALTER TABLE "public"."cons_actividad" ADD PRIMARY KEY ("codcons_actividad", "consultor_usuario_idusuario", "consultor_idconsultor");

-- ----------------------------
-- Primary Key structure for table "public"."cons_documento"
-- ----------------------------
ALTER TABLE "public"."cons_documento" ADD PRIMARY KEY ("idcons_documento", "consultor_usuario_idusuario", "consultor_idconsultor");

-- ----------------------------
-- Uniques structure for table "public"."consultor"
-- ----------------------------
ALTER TABLE "public"."consultor" ADD UNIQUE ("idconsultor");

-- ----------------------------
-- Primary Key structure for table "public"."consultor"
-- ----------------------------
ALTER TABLE "public"."consultor" ADD PRIMARY KEY ("idconsultor", "usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "public"."consultor_proyecto_grupo_empresa"
-- ----------------------------
ALTER TABLE "public"."consultor_proyecto_grupo_empresa" ADD PRIMARY KEY ("consultor_usuario_idusuario", "consultor_idconsultor", "grupo_empresa_usuario_idusuario", "grupo_empresa_codgrupo_empresa", "proyecto_codproyecto");

-- ----------------------------
-- Primary Key structure for table "public"."criterio"
-- ----------------------------
ALTER TABLE "public"."criterio" ADD PRIMARY KEY ("id_criterio", "tipo_criterio_id_tipo", "registro_evaluacion_final_proyecto_codproyecto", "registro_evaluacion_final_consultor_idconsultor", "registro_evaluacion_final_consultor_usuario_idusuario", "registro_evaluacion_final_idregistro_evaluacion_final");

-- ----------------------------
-- Primary Key structure for table "public"."detalle_cons"
-- ----------------------------
ALTER TABLE "public"."detalle_cons" ADD PRIMARY KEY ("iddetalle_cons", "consultor_idconsultor", "detalle_ge_evaluacion_semanal_codevaluacion_semanal", "detalle_ge_evaluacion_semanal_calendario_codcalendario", "detalle_ge_evaluacion_semanal_calendario_grupo_empresa_codgrupo", "detalle_ge_evaluacion_semanal_calendario_grupo_empresa_usuario_", "detalle_ge_iddetalle_ge");

-- ----------------------------
-- Primary Key structure for table "public"."detalle_criterio"
-- ----------------------------
ALTER TABLE "public"."detalle_criterio" ADD PRIMARY KEY ("iddetalle_criterio", "criterio_registro_evaluacion_final_idregistro_evaluacion_final", "criterio_registro_evaluacion_final_consultor_usuario_idusuario", "criterio_registro_evaluacion_final_consultor_idconsultor", "criterio_registro_evaluacion_final_proyecto_codproyecto", "criterio_tipo_criterio_id_tipo", "criterio_id_criterio");

-- ----------------------------
-- Primary Key structure for table "public"."detalle_ge"
-- ----------------------------
ALTER TABLE "public"."detalle_ge" ADD PRIMARY KEY ("iddetalle_ge", "evaluacion_semanal_calendario_grupo_empresa_usuario_idusuario", "evaluacion_semanal_calendario_grupo_empresa_codgrupo_empresa", "evaluacion_semanal_calendario_codcalendario", "evaluacion_semanal_codevaluacion_semanal");

-- ----------------------------
-- Primary Key structure for table "public"."documentospublicos"
-- ----------------------------
ALTER TABLE "public"."documentospublicos" ADD PRIMARY KEY ("codpublico");

-- ----------------------------
-- Primary Key structure for table "public"."entregables"
-- ----------------------------
ALTER TABLE "public"."entregables" ADD PRIMARY KEY ("codentregables", "hito_pagable_plan_pago_calendario_grupo_empresa_usuario_idusuar", "hito_pagable_plan_pago_calendario_grupo_empresa_codgrupo_empres", "hito_pagable_plan_pago_calendario_codcalendario", "hito_pagable_plan_pago_codplan_pago", "hito_pagable_codhito_pagable");

-- ----------------------------
-- Primary Key structure for table "public"."evaluacion_final"
-- ----------------------------
ALTER TABLE "public"."evaluacion_final" ADD PRIMARY KEY ("codevaluacion_final", "grupo_empresa_usuario_idusuario", "grupo_empresa_codgrupo_empresa", "detalle_criterio_criterio_id_criterio", "detalle_criterio_criterio_tipo_criterio_id_tipo", "detalle_criterio_criterio_registro_evaluacion_final_proyecto_co", "detalle_criterio_criterio_registro_evaluacion_final_consultor_i", "detalle_criterio_criterio_registro_evaluacion_final_consultor_u", "detalle_criterio_criterio_registro_evaluacion_final_idregistro_", "detalle_criterio_iddetalle_criterio");

-- ----------------------------
-- Primary Key structure for table "public"."evaluacion_semanal"
-- ----------------------------
ALTER TABLE "public"."evaluacion_semanal" ADD PRIMARY KEY ("codevaluacion_semanal", "calendario_codcalendario", "calendario_grupo_empresa_codgrupo_empresa", "calendario_grupo_empresa_usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "public"."foro"
-- ----------------------------
ALTER TABLE "public"."foro" ADD PRIMARY KEY ("codforo");

-- ----------------------------
-- Primary Key structure for table "public"."funcion"
-- ----------------------------
ALTER TABLE "public"."funcion" ADD PRIMARY KEY ("codfuncion");

-- ----------------------------
-- Primary Key structure for table "public"."funcion_app"
-- ----------------------------
ALTER TABLE "public"."funcion_app" ADD PRIMARY KEY ("codfuncion_app", "app_codapp", "funcion_codfuncion");

-- ----------------------------
-- Primary Key structure for table "public"."ge_documento"
-- ----------------------------
ALTER TABLE "public"."ge_documento" ADD PRIMARY KEY ("idge_documento", "grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario");

-- ----------------------------
-- Uniques structure for table "public"."grupo_empresa"
-- ----------------------------
ALTER TABLE "public"."grupo_empresa" ADD UNIQUE ("nombrelargoge");

-- ----------------------------
-- Primary Key structure for table "public"."grupo_empresa"
-- ----------------------------
ALTER TABLE "public"."grupo_empresa" ADD PRIMARY KEY ("codgrupo_empresa", "usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "public"."hito_pagable"
-- ----------------------------
ALTER TABLE "public"."hito_pagable" ADD PRIMARY KEY ("codhito_pagable", "plan_pago_codplan_pago", "plan_pago_calendario_codcalendario", "plan_pago_calendario_grupo_empresa_codgrupo_empresa", "plan_pago_calendario_grupo_empresa_usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "public"."pago_consultor"
-- ----------------------------
ALTER TABLE "public"."pago_consultor" ADD PRIMARY KEY ("codpago_consultor", "consultor_idconsultor", "consultor_usuario_idusuario", "hito_pagable_plan_pago_codplan_pago", "hito_pagable_codhito_pagable", "hito_pagable_plan_pago_calendario_grupo_empresa_usuario_idusuar", "hito_pagable_plan_pago_calendario_grupo_empresa_codgrupo_empres", "hito_pagable_plan_pago_calendario_codcalendario");

-- ----------------------------
-- Primary Key structure for table "public"."plan_pago"
-- ----------------------------
ALTER TABLE "public"."plan_pago" ADD PRIMARY KEY ("codplan_pago", "calendario_codcalendario", "calendario_grupo_empresa_codgrupo_empresa", "calendario_grupo_empresa_usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "public"."plandepagos"
-- ----------------------------
ALTER TABLE "public"."plandepagos" ADD PRIMARY KEY ("codplandepagos", "propuestapago_grupo_empresa_codgrupo_empresa", "propuestapago_grupo_empresa_usuario_idusuario", "propuestapago_codpropuestapago");

-- ----------------------------
-- Primary Key structure for table "public"."planpago_entregables"
-- ----------------------------
ALTER TABLE "public"."planpago_entregables" ADD PRIMARY KEY ("codplanpago_entregables", "plandepagos_propuestapago_codpropuestapago", "plandepagos_propuestapago_grupo_empresa_usuario_idusuario", "plandepagos_propuestapago_grupo_empresa_codgrupo_empresa", "plandepagos_codplandepagos");

-- ----------------------------
-- Primary Key structure for table "public"."propuestapago"
-- ----------------------------
ALTER TABLE "public"."propuestapago" ADD PRIMARY KEY ("codpropuestapago", "grupo_empresa_usuario_idusuario", "grupo_empresa_codgrupo_empresa");

-- ----------------------------
-- Primary Key structure for table "public"."proyecto"
-- ----------------------------
ALTER TABLE "public"."proyecto" ADD PRIMARY KEY ("codproyecto");

-- ----------------------------
-- Primary Key structure for table "public"."registro_evaluacion_final"
-- ----------------------------
ALTER TABLE "public"."registro_evaluacion_final" ADD PRIMARY KEY ("idregistro_evaluacion_final", "consultor_usuario_idusuario", "consultor_idconsultor", "proyecto_codproyecto");

-- ----------------------------
-- Primary Key structure for table "public"."registros"
-- ----------------------------
ALTER TABLE "public"."registros" ADD PRIMARY KEY ("codhito", "codentregable");

-- ----------------------------
-- Primary Key structure for table "public"."repuesta_actividad"
-- ----------------------------
ALTER TABLE "public"."repuesta_actividad" ADD PRIMARY KEY ("codrepuesta_actividad", "cons_actividad_consultor_idconsultor", "cons_actividad_consultor_usuario_idusuario", "cons_actividad_codcons_actividad", "ge_documento_grupo_empresa_usuario_idusuario", "ge_documento_grupo_empresa_codgrupo_empresa", "ge_documento_idge_documento");

-- ----------------------------
-- Primary Key structure for table "public"."rol"
-- ----------------------------
ALTER TABLE "public"."rol" ADD PRIMARY KEY ("codrol");

-- ----------------------------
-- Primary Key structure for table "public"."rol_funcion"
-- ----------------------------
ALTER TABLE "public"."rol_funcion" ADD PRIMARY KEY ("codrol_funcion", "rol_codrol", "funcion_codfuncion");

-- ----------------------------
-- Primary Key structure for table "public"."socio"
-- ----------------------------
ALTER TABLE "public"."socio" ADD PRIMARY KEY ("idsocio", "grupo_empresa_codgrupo_empresa", "tipo_socio_codtipo_socio", "grupo_empresa_usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "public"."telf_ge"
-- ----------------------------
ALTER TABLE "public"."telf_ge" ADD PRIMARY KEY ("idtelf_ge", "grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "public"."test"
-- ----------------------------
ALTER TABLE "public"."test" ADD PRIMARY KEY ("id");

-- ----------------------------
-- Primary Key structure for table "public"."tipo_criterio"
-- ----------------------------
ALTER TABLE "public"."tipo_criterio" ADD PRIMARY KEY ("id_tipo");

-- ----------------------------
-- Primary Key structure for table "public"."tipo_socio"
-- ----------------------------
ALTER TABLE "public"."tipo_socio" ADD PRIMARY KEY ("codtipo_socio");

-- ----------------------------
-- Primary Key structure for table "public"."user_rol"
-- ----------------------------
ALTER TABLE "public"."user_rol" ADD PRIMARY KEY ("coduser_rol", "usuario_idusuario", "rol_codrol");

-- ----------------------------
-- Uniques structure for table "public"."usuario"
-- ----------------------------
ALTER TABLE "public"."usuario" ADD UNIQUE ("login");

-- ----------------------------
-- Primary Key structure for table "public"."usuario"
-- ----------------------------
ALTER TABLE "public"."usuario" ADD PRIMARY KEY ("idusuario");

-- ----------------------------
-- Foreign Key structure for table "public"."calendario"
-- ----------------------------
ALTER TABLE "public"."calendario" ADD FOREIGN KEY ("grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") REFERENCES "public"."grupo_empresa" ("codgrupo_empresa", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."cons_actividad"
-- ----------------------------
ALTER TABLE "public"."cons_actividad" ADD FOREIGN KEY ("consultor_idconsultor", "consultor_usuario_idusuario") REFERENCES "public"."consultor" ("idconsultor", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."cons_documento"
-- ----------------------------
ALTER TABLE "public"."cons_documento" ADD FOREIGN KEY ("consultor_idconsultor", "consultor_usuario_idusuario") REFERENCES "public"."consultor" ("idconsultor", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."consultor"
-- ----------------------------
ALTER TABLE "public"."consultor" ADD FOREIGN KEY ("usuario_idusuario") REFERENCES "public"."usuario" ("idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."consultor_proyecto_grupo_empresa"
-- ----------------------------
ALTER TABLE "public"."consultor_proyecto_grupo_empresa" ADD FOREIGN KEY ("grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") REFERENCES "public"."grupo_empresa" ("codgrupo_empresa", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."consultor_proyecto_grupo_empresa" ADD FOREIGN KEY ("proyecto_codproyecto") REFERENCES "public"."proyecto" ("codproyecto") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."consultor_proyecto_grupo_empresa" ADD FOREIGN KEY ("consultor_idconsultor", "consultor_usuario_idusuario") REFERENCES "public"."consultor" ("idconsultor", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."criterio"
-- ----------------------------
ALTER TABLE "public"."criterio" ADD FOREIGN KEY ("registro_evaluacion_final_idregistro_evaluacion_final", "registro_evaluacion_final_consultor_usuario_idusuario", "registro_evaluacion_final_consultor_idconsultor", "registro_evaluacion_final_proyecto_codproyecto") REFERENCES "public"."registro_evaluacion_final" ("idregistro_evaluacion_final", "consultor_usuario_idusuario", "consultor_idconsultor", "proyecto_codproyecto") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."criterio" ADD FOREIGN KEY ("tipo_criterio_id_tipo") REFERENCES "public"."tipo_criterio" ("id_tipo") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."detalle_cons"
-- ----------------------------
ALTER TABLE "public"."detalle_cons" ADD FOREIGN KEY ("detalle_ge_iddetalle_ge", "detalle_ge_evaluacion_semanal_calendario_grupo_empresa_usuario_", "detalle_ge_evaluacion_semanal_calendario_grupo_empresa_codgrupo", "detalle_ge_evaluacion_semanal_calendario_codcalendario", "detalle_ge_evaluacion_semanal_codevaluacion_semanal") REFERENCES "public"."detalle_ge" ("iddetalle_ge", "evaluacion_semanal_calendario_grupo_empresa_usuario_idusuario", "evaluacion_semanal_calendario_grupo_empresa_codgrupo_empresa", "evaluacion_semanal_calendario_codcalendario", "evaluacion_semanal_codevaluacion_semanal") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."detalle_cons" ADD FOREIGN KEY ("consultor_idconsultor") REFERENCES "public"."consultor" ("idconsultor") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."detalle_criterio"
-- ----------------------------
ALTER TABLE "public"."detalle_criterio" ADD FOREIGN KEY ("criterio_id_criterio", "criterio_tipo_criterio_id_tipo", "criterio_registro_evaluacion_final_proyecto_codproyecto", "criterio_registro_evaluacion_final_consultor_idconsultor", "criterio_registro_evaluacion_final_consultor_usuario_idusuario", "criterio_registro_evaluacion_final_idregistro_evaluacion_final") REFERENCES "public"."criterio" ("id_criterio", "tipo_criterio_id_tipo", "registro_evaluacion_final_proyecto_codproyecto", "registro_evaluacion_final_consultor_idconsultor", "registro_evaluacion_final_consultor_usuario_idusuario", "registro_evaluacion_final_idregistro_evaluacion_final") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."detalle_ge"
-- ----------------------------
ALTER TABLE "public"."detalle_ge" ADD FOREIGN KEY ("evaluacion_semanal_codevaluacion_semanal", "evaluacion_semanal_calendario_codcalendario", "evaluacion_semanal_calendario_grupo_empresa_codgrupo_empresa", "evaluacion_semanal_calendario_grupo_empresa_usuario_idusuario") REFERENCES "public"."evaluacion_semanal" ("codevaluacion_semanal", "calendario_codcalendario", "calendario_grupo_empresa_codgrupo_empresa", "calendario_grupo_empresa_usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."entregables"
-- ----------------------------
ALTER TABLE "public"."entregables" ADD FOREIGN KEY ("hito_pagable_codhito_pagable", "hito_pagable_plan_pago_codplan_pago", "hito_pagable_plan_pago_calendario_codcalendario", "hito_pagable_plan_pago_calendario_grupo_empresa_codgrupo_empres", "hito_pagable_plan_pago_calendario_grupo_empresa_usuario_idusuar") REFERENCES "public"."hito_pagable" ("codhito_pagable", "plan_pago_codplan_pago", "plan_pago_calendario_codcalendario", "plan_pago_calendario_grupo_empresa_codgrupo_empresa", "plan_pago_calendario_grupo_empresa_usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."evaluacion_final"
-- ----------------------------
ALTER TABLE "public"."evaluacion_final" ADD FOREIGN KEY ("detalle_criterio_iddetalle_criterio", "detalle_criterio_criterio_registro_evaluacion_final_idregistro_", "detalle_criterio_criterio_registro_evaluacion_final_consultor_u", "detalle_criterio_criterio_registro_evaluacion_final_consultor_i", "detalle_criterio_criterio_registro_evaluacion_final_proyecto_co", "detalle_criterio_criterio_tipo_criterio_id_tipo", "detalle_criterio_criterio_id_criterio") REFERENCES "public"."detalle_criterio" ("iddetalle_criterio", "criterio_registro_evaluacion_final_idregistro_evaluacion_final", "criterio_registro_evaluacion_final_consultor_usuario_idusuario", "criterio_registro_evaluacion_final_consultor_idconsultor", "criterio_registro_evaluacion_final_proyecto_codproyecto", "criterio_tipo_criterio_id_tipo", "criterio_id_criterio") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."evaluacion_final" ADD FOREIGN KEY ("grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") REFERENCES "public"."grupo_empresa" ("codgrupo_empresa", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."evaluacion_semanal"
-- ----------------------------
ALTER TABLE "public"."evaluacion_semanal" ADD FOREIGN KEY ("calendario_codcalendario", "calendario_grupo_empresa_codgrupo_empresa", "calendario_grupo_empresa_usuario_idusuario") REFERENCES "public"."calendario" ("codcalendario", "grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."funcion_app"
-- ----------------------------
ALTER TABLE "public"."funcion_app" ADD FOREIGN KEY ("funcion_codfuncion") REFERENCES "public"."funcion" ("codfuncion") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."funcion_app" ADD FOREIGN KEY ("app_codapp") REFERENCES "public"."app" ("codapp") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."ge_documento"
-- ----------------------------
ALTER TABLE "public"."ge_documento" ADD FOREIGN KEY ("grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") REFERENCES "public"."grupo_empresa" ("codgrupo_empresa", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."grupo_empresa"
-- ----------------------------
ALTER TABLE "public"."grupo_empresa" ADD FOREIGN KEY ("usuario_idusuario") REFERENCES "public"."usuario" ("idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."hito_pagable"
-- ----------------------------
ALTER TABLE "public"."hito_pagable" ADD FOREIGN KEY ("plan_pago_codplan_pago", "plan_pago_calendario_grupo_empresa_usuario_idusuario", "plan_pago_calendario_grupo_empresa_codgrupo_empresa", "plan_pago_calendario_codcalendario") REFERENCES "public"."plan_pago" ("codplan_pago", "calendario_codcalendario", "calendario_grupo_empresa_codgrupo_empresa", "calendario_grupo_empresa_usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."pago_consultor"
-- ----------------------------
ALTER TABLE "public"."pago_consultor" ADD FOREIGN KEY ("consultor_idconsultor", "consultor_usuario_idusuario") REFERENCES "public"."consultor" ("idconsultor", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."pago_consultor" ADD FOREIGN KEY ("hito_pagable_codhito_pagable", "hito_pagable_plan_pago_codplan_pago", "hito_pagable_plan_pago_calendario_codcalendario", "hito_pagable_plan_pago_calendario_grupo_empresa_codgrupo_empres", "hito_pagable_plan_pago_calendario_grupo_empresa_usuario_idusuar") REFERENCES "public"."hito_pagable" ("codhito_pagable", "plan_pago_codplan_pago", "plan_pago_calendario_codcalendario", "plan_pago_calendario_grupo_empresa_codgrupo_empresa", "plan_pago_calendario_grupo_empresa_usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."plan_pago"
-- ----------------------------
ALTER TABLE "public"."plan_pago" ADD FOREIGN KEY ("calendario_codcalendario", "calendario_grupo_empresa_codgrupo_empresa", "calendario_grupo_empresa_usuario_idusuario") REFERENCES "public"."calendario" ("codcalendario", "grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."plandepagos"
-- ----------------------------
ALTER TABLE "public"."plandepagos" ADD FOREIGN KEY ("propuestapago_grupo_empresa_usuario_idusuario", "propuestapago_grupo_empresa_codgrupo_empresa", "propuestapago_codpropuestapago") REFERENCES "public"."propuestapago" ("codpropuestapago", "grupo_empresa_usuario_idusuario", "grupo_empresa_codgrupo_empresa") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."planpago_entregables"
-- ----------------------------
ALTER TABLE "public"."planpago_entregables" ADD FOREIGN KEY ("plandepagos_propuestapago_grupo_empresa_codgrupo_empresa", "plandepagos_propuestapago_grupo_empresa_usuario_idusuario", "plandepagos_propuestapago_codpropuestapago", "plandepagos_codplandepagos") REFERENCES "public"."plandepagos" ("codplandepagos", "propuestapago_grupo_empresa_codgrupo_empresa", "propuestapago_grupo_empresa_usuario_idusuario", "propuestapago_codpropuestapago") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."propuestapago"
-- ----------------------------
ALTER TABLE "public"."propuestapago" ADD FOREIGN KEY ("grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") REFERENCES "public"."grupo_empresa" ("codgrupo_empresa", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."registro_evaluacion_final"
-- ----------------------------
ALTER TABLE "public"."registro_evaluacion_final" ADD FOREIGN KEY ("proyecto_codproyecto") REFERENCES "public"."proyecto" ("codproyecto") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."registro_evaluacion_final" ADD FOREIGN KEY ("consultor_idconsultor", "consultor_usuario_idusuario") REFERENCES "public"."consultor" ("idconsultor", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."repuesta_actividad"
-- ----------------------------
ALTER TABLE "public"."repuesta_actividad" ADD FOREIGN KEY ("cons_actividad_codcons_actividad", "cons_actividad_consultor_usuario_idusuario", "cons_actividad_consultor_idconsultor") REFERENCES "public"."cons_actividad" ("codcons_actividad", "consultor_usuario_idusuario", "consultor_idconsultor") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."repuesta_actividad" ADD FOREIGN KEY ("ge_documento_idge_documento", "ge_documento_grupo_empresa_codgrupo_empresa", "ge_documento_grupo_empresa_usuario_idusuario") REFERENCES "public"."ge_documento" ("idge_documento", "grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."rol_funcion"
-- ----------------------------
ALTER TABLE "public"."rol_funcion" ADD FOREIGN KEY ("rol_codrol") REFERENCES "public"."rol" ("codrol") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."rol_funcion" ADD FOREIGN KEY ("funcion_codfuncion") REFERENCES "public"."funcion" ("codfuncion") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."socio"
-- ----------------------------
ALTER TABLE "public"."socio" ADD FOREIGN KEY ("grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") REFERENCES "public"."grupo_empresa" ("codgrupo_empresa", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."socio" ADD FOREIGN KEY ("tipo_socio_codtipo_socio") REFERENCES "public"."tipo_socio" ("codtipo_socio") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."telf_ge"
-- ----------------------------
ALTER TABLE "public"."telf_ge" ADD FOREIGN KEY ("grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") REFERENCES "public"."grupo_empresa" ("codgrupo_empresa", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."user_rol"
-- ----------------------------
ALTER TABLE "public"."user_rol" ADD FOREIGN KEY ("rol_codrol") REFERENCES "public"."rol" ("codrol") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."user_rol" ADD FOREIGN KEY ("usuario_idusuario") REFERENCES "public"."usuario" ("idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;
