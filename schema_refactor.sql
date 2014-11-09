/*
Navicat PGSQL Data Transfer

Source Server         : postgresql
Source Server Version : 90305
Source Host           : 127.0.0.1:5432
Source Database       : apoyotis_whs
Source Schema         : public

Target Server Type    : PGSQL
Target Server Version : 90100
File Encoding         : 65001

Date: 2014-11-09 01:25:25
*/


-- ----------------------------
-- Sequence structure for "app_codapp_seq"
-- ----------------------------
DROP SEQUENCE "app_codapp_seq";
CREATE SEQUENCE "app_codapp_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "calendario_codcalendario_seq"
-- ----------------------------
DROP SEQUENCE "calendario_codcalendario_seq";
CREATE SEQUENCE "calendario_codcalendario_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "cons_actividad_codcons_actividad_seq"
-- ----------------------------
DROP SEQUENCE "cons_actividad_codcons_actividad_seq";
CREATE SEQUENCE "cons_actividad_codcons_actividad_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "cons_documento_idcons_documento_seq"
-- ----------------------------
DROP SEQUENCE "cons_documento_idcons_documento_seq";
CREATE SEQUENCE "cons_documento_idcons_documento_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 10
 CACHE 1;

-- ----------------------------
-- Sequence structure for "consultor_idconsultor_seq"
-- ----------------------------
DROP SEQUENCE "consultor_idconsultor_seq";
CREATE SEQUENCE "consultor_idconsultor_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 13
 CACHE 1;

-- ----------------------------
-- Sequence structure for "consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em"
-- ----------------------------
DROP SEQUENCE "consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em";
CREATE SEQUENCE "consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "consultor_proyecto_grupo_empresa_grupo_empresa_usuario_idusuari"
-- ----------------------------
DROP SEQUENCE "consultor_proyecto_grupo_empresa_grupo_empresa_usuario_idusuari";
CREATE SEQUENCE "consultor_proyecto_grupo_empresa_grupo_empresa_usuario_idusuari"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "criterio_id_criterio_seq"
-- ----------------------------
DROP SEQUENCE "criterio_id_criterio_seq";
CREATE SEQUENCE "criterio_id_criterio_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "detalle_cons_iddetalle_cons_seq"
-- ----------------------------
DROP SEQUENCE "detalle_cons_iddetalle_cons_seq";
CREATE SEQUENCE "detalle_cons_iddetalle_cons_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "detalle_criterio_iddetalle_criterio_seq"
-- ----------------------------
DROP SEQUENCE "detalle_criterio_iddetalle_criterio_seq";
CREATE SEQUENCE "detalle_criterio_iddetalle_criterio_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "detalle_ge_iddetalle_ge_seq"
-- ----------------------------
DROP SEQUENCE "detalle_ge_iddetalle_ge_seq";
CREATE SEQUENCE "detalle_ge_iddetalle_ge_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "documentospublicos_codpublico_seq"
-- ----------------------------
DROP SEQUENCE "documentospublicos_codpublico_seq";
CREATE SEQUENCE "documentospublicos_codpublico_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "evaluacion_final_codevaluacion_final_seq"
-- ----------------------------
DROP SEQUENCE "evaluacion_final_codevaluacion_final_seq";
CREATE SEQUENCE "evaluacion_final_codevaluacion_final_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "evaluacion_semanal_codevaluacion_semanal_seq"
-- ----------------------------
DROP SEQUENCE "evaluacion_semanal_codevaluacion_semanal_seq";
CREATE SEQUENCE "evaluacion_semanal_codevaluacion_semanal_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "foro_codforo_seq"
-- ----------------------------
DROP SEQUENCE "foro_codforo_seq";
CREATE SEQUENCE "foro_codforo_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "funcion_app_codfuncion_app_seq"
-- ----------------------------
DROP SEQUENCE "funcion_app_codfuncion_app_seq";
CREATE SEQUENCE "funcion_app_codfuncion_app_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "funcion_codfuncion_seq"
-- ----------------------------
DROP SEQUENCE "funcion_codfuncion_seq";
CREATE SEQUENCE "funcion_codfuncion_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "ge_documento_idge_documento_seq"
-- ----------------------------
DROP SEQUENCE "ge_documento_idge_documento_seq";
CREATE SEQUENCE "ge_documento_idge_documento_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 4
 CACHE 1;

-- ----------------------------
-- Sequence structure for "gestion_id_gestion_seq"
-- ----------------------------
DROP SEQUENCE "gestion_id_gestion_seq";
CREATE SEQUENCE "gestion_id_gestion_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "grupo_empresa_codgrupo_empresa_seq"
-- ----------------------------
DROP SEQUENCE "grupo_empresa_codgrupo_empresa_seq";
CREATE SEQUENCE "grupo_empresa_codgrupo_empresa_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 18
 CACHE 1;

-- ----------------------------
-- Sequence structure for "pago_consultor_codpago_consultor_seq"
-- ----------------------------
DROP SEQUENCE "pago_consultor_codpago_consultor_seq";
CREATE SEQUENCE "pago_consultor_codpago_consultor_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "plandepagos_codplandepagos_seq"
-- ----------------------------
DROP SEQUENCE "plandepagos_codplandepagos_seq";
CREATE SEQUENCE "plandepagos_codplandepagos_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "planpago_entregables_codplanpago_entregables_seq"
-- ----------------------------
DROP SEQUENCE "planpago_entregables_codplanpago_entregables_seq";
CREATE SEQUENCE "planpago_entregables_codplanpago_entregables_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "propuestapago_codpropuestapago_seq"
-- ----------------------------
DROP SEQUENCE "propuestapago_codpropuestapago_seq";
CREATE SEQUENCE "propuestapago_codpropuestapago_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "proyecto_codproyecto_seq"
-- ----------------------------
DROP SEQUENCE "proyecto_codproyecto_seq";
CREATE SEQUENCE "proyecto_codproyecto_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "proyecto_gestion_id_gestion_seq"
-- ----------------------------
DROP SEQUENCE "proyecto_gestion_id_gestion_seq";
CREATE SEQUENCE "proyecto_gestion_id_gestion_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "registro_evaluacion_final_idregistro_evaluacion_final_seq"
-- ----------------------------
DROP SEQUENCE "registro_evaluacion_final_idregistro_evaluacion_final_seq";
CREATE SEQUENCE "registro_evaluacion_final_idregistro_evaluacion_final_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "repuesta_actividad_codrepuesta_actividad_seq"
-- ----------------------------
DROP SEQUENCE "repuesta_actividad_codrepuesta_actividad_seq";
CREATE SEQUENCE "repuesta_actividad_codrepuesta_actividad_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "rol_codrol_seq"
-- ----------------------------
DROP SEQUENCE "rol_codrol_seq";
CREATE SEQUENCE "rol_codrol_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 91
 CACHE 1;

-- ----------------------------
-- Sequence structure for "rol_funcion_codrol_funcion_seq"
-- ----------------------------
DROP SEQUENCE "rol_funcion_codrol_funcion_seq";
CREATE SEQUENCE "rol_funcion_codrol_funcion_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "socio_idsocio_seq"
-- ----------------------------
DROP SEQUENCE "socio_idsocio_seq";
CREATE SEQUENCE "socio_idsocio_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 4
 CACHE 1;

-- ----------------------------
-- Sequence structure for "telf_ge_idtelf_ge_seq"
-- ----------------------------
DROP SEQUENCE "telf_ge_idtelf_ge_seq";
CREATE SEQUENCE "telf_ge_idtelf_ge_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "tipo_criterio_id_tipo_seq"
-- ----------------------------
DROP SEQUENCE "tipo_criterio_id_tipo_seq";
CREATE SEQUENCE "tipo_criterio_id_tipo_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 4
 CACHE 1;

-- ----------------------------
-- Sequence structure for "tipo_socio_codtipo_socio_seq"
-- ----------------------------
DROP SEQUENCE "tipo_socio_codtipo_socio_seq";
CREATE SEQUENCE "tipo_socio_codtipo_socio_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 25
 CACHE 1;

-- ----------------------------
-- Sequence structure for "user_rol_coduser_rol_seq"
-- ----------------------------
DROP SEQUENCE "user_rol_coduser_rol_seq";
CREATE SEQUENCE "user_rol_coduser_rol_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 79
 CACHE 1;

-- ----------------------------
-- Sequence structure for "usuario_idusuario_seq"
-- ----------------------------
DROP SEQUENCE "usuario_idusuario_seq";
CREATE SEQUENCE "usuario_idusuario_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 89
 CACHE 1;

-- ----------------------------
-- Table structure for "app"
-- ----------------------------
DROP TABLE "app";
CREATE TABLE "app" (
"codapp" int4 DEFAULT nextval('app_codapp_seq'::regclass) NOT NULL,
"nombreapp" varchar(45)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of app
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "calendario"
-- ----------------------------
DROP TABLE "calendario";
CREATE TABLE "calendario" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "cons_actividad"
-- ----------------------------
DROP TABLE "cons_actividad";
CREATE TABLE "cons_actividad" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "cons_documento"
-- ----------------------------
DROP TABLE "cons_documento";
CREATE TABLE "cons_documento" (
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
BEGIN;
INSERT INTO "cons_documento" VALUES ('10', '89', '13', 'InvitacionPublica022014.pdf', 'Test', 'Test', '/docs_consultor/89/InvitacionPublica022014.pdf', '2014-11-09 00:49:14', '2014-11-09 00:49:14');
COMMIT;

-- ----------------------------
-- Table structure for "consultor"
-- ----------------------------
DROP TABLE "consultor";
CREATE TABLE "consultor" (
"idconsultor" int4 DEFAULT nextval('consultor_idconsultor_seq'::regclass) NOT NULL,
"usuario_idusuario" int4 NOT NULL,
"nombreconsultor" varchar(45),
"correoconsultor" varchar(45),
"telefonoconsultor" int4,
"apellidopaternoconsultor" varchar(45),
"apellidomaternoconsultor" varchar(45),
"fotoconsultor" varchar(128)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of consultor
-- ----------------------------
BEGIN;
INSERT INTO "consultor" VALUES ('13', '89', 'Maria Leticia', 'leticia@memi.ums.edu.bo', '74314297', 'Blanco', 'Coca', '/img/foto_consultor/20141106024403_leticia.jpg');
COMMIT;

-- ----------------------------
-- Table structure for "consultor_proyecto_grupo_empresa"
-- ----------------------------
DROP TABLE "consultor_proyecto_grupo_empresa";
CREATE TABLE "consultor_proyecto_grupo_empresa" (
"grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"proyecto_codproyecto" int4 NOT NULL,
"codconsultor_proyecto_grupo_empresa" int4 DEFAULT nextval('consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em'::regclass) NOT NULL,
"grupo_empresa_usuario_idusuario" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of consultor_proyecto_grupo_empresa
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "criterio"
-- ----------------------------
DROP TABLE "criterio";
CREATE TABLE "criterio" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "detalle_cons"
-- ----------------------------
DROP TABLE "detalle_cons";
CREATE TABLE "detalle_cons" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "detalle_criterio"
-- ----------------------------
DROP TABLE "detalle_criterio";
CREATE TABLE "detalle_criterio" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "detalle_ge"
-- ----------------------------
DROP TABLE "detalle_ge";
CREATE TABLE "detalle_ge" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "documentospublicos"
-- ----------------------------
DROP TABLE "documentospublicos";
CREATE TABLE "documentospublicos" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "entregables"
-- ----------------------------
DROP TABLE "entregables";
CREATE TABLE "entregables" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "evaluacion_final"
-- ----------------------------
DROP TABLE "evaluacion_final";
CREATE TABLE "evaluacion_final" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "evaluacion_semanal"
-- ----------------------------
DROP TABLE "evaluacion_semanal";
CREATE TABLE "evaluacion_semanal" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "foro"
-- ----------------------------
DROP TABLE "foro";
CREATE TABLE "foro" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "funcion"
-- ----------------------------
DROP TABLE "funcion";
CREATE TABLE "funcion" (
"codfuncion" int4 DEFAULT nextval('funcion_codfuncion_seq'::regclass) NOT NULL,
"tipofuncion" varchar(45)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of funcion
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "funcion_app"
-- ----------------------------
DROP TABLE "funcion_app";
CREATE TABLE "funcion_app" (
"codfuncion_app" int4 DEFAULT nextval('funcion_app_codfuncion_app_seq'::regclass) NOT NULL,
"app_codapp" int4 NOT NULL,
"funcion_codfuncion" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of funcion_app
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "ge_documento"
-- ----------------------------
DROP TABLE "ge_documento";
CREATE TABLE "ge_documento" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "gestion"
-- ----------------------------
DROP TABLE "gestion";
CREATE TABLE "gestion" (
"id_gestion" int4 DEFAULT nextval('gestion_id_gestion_seq'::regclass) NOT NULL,
"nombre_gestion" varchar(25)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of gestion
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "grupo_empresa"
-- ----------------------------
DROP TABLE "grupo_empresa";
CREATE TABLE "grupo_empresa" (
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
BEGIN;
INSERT INTO "grupo_empresa" VALUES ('18', '88', 'Work At Home S.R.L.', 'WHS S.R.L.', 'workathomesoft@gmail.com', 'Av. Maria del carmen Nro S/n', '70797024', '/img/logo_grupo_empresas/20141015055355_work_at_home.png');
COMMIT;

-- ----------------------------
-- Table structure for "hito_pagable"
-- ----------------------------
DROP TABLE "hito_pagable";
CREATE TABLE "hito_pagable" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "migrations"
-- ----------------------------
DROP TABLE "migrations";
CREATE TABLE "migrations" (
"migration" varchar(255) NOT NULL,
"batch" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of migrations
-- ----------------------------
BEGIN;
INSERT INTO "migrations" VALUES ('2014_10_17_004707_create_test_table', '1');
COMMIT;

-- ----------------------------
-- Table structure for "pago_consultor"
-- ----------------------------
DROP TABLE "pago_consultor";
CREATE TABLE "pago_consultor" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "plan_pago"
-- ----------------------------
DROP TABLE "plan_pago";
CREATE TABLE "plan_pago" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "plandepagos"
-- ----------------------------
DROP TABLE "plandepagos";
CREATE TABLE "plandepagos" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "planpago_entregables"
-- ----------------------------
DROP TABLE "planpago_entregables";
CREATE TABLE "planpago_entregables" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "propuestapago"
-- ----------------------------
DROP TABLE "propuestapago";
CREATE TABLE "propuestapago" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "proyecto"
-- ----------------------------
DROP TABLE "proyecto";
CREATE TABLE "proyecto" (
"fechafinproyecto" date,
"gestion_id_gestion" int4,
"codproyecto" int4 DEFAULT nextval('proyecto_codproyecto_seq'::regclass) NOT NULL,
"consultor_idconsultor" int4 NOT NULL,
"consultor_usuario_idusuario" int4 NOT NULL,
"nombreproyecto" varchar(120) NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of proyecto
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "registro_evaluacion_final"
-- ----------------------------
DROP TABLE "registro_evaluacion_final";
CREATE TABLE "registro_evaluacion_final" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "registros"
-- ----------------------------
DROP TABLE "registros";
CREATE TABLE "registros" (
"codhito" int4 NOT NULL,
"codentregable" int4 NOT NULL,
"entregable" varchar(120)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of registros
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "repuesta_actividad"
-- ----------------------------
DROP TABLE "repuesta_actividad";
CREATE TABLE "repuesta_actividad" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "rol"
-- ----------------------------
DROP TABLE "rol";
CREATE TABLE "rol" (
"codrol" int4 DEFAULT nextval('rol_codrol_seq'::regclass) NOT NULL,
"tiporol" varchar(45)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of rol
-- ----------------------------
BEGIN;
INSERT INTO "rol" VALUES ('88', 'administrador');
INSERT INTO "rol" VALUES ('89', 'consultor');
INSERT INTO "rol" VALUES ('90', 'grupo-empresa');
INSERT INTO "rol" VALUES ('91', 'otro');
COMMIT;

-- ----------------------------
-- Table structure for "rol_funcion"
-- ----------------------------
DROP TABLE "rol_funcion";
CREATE TABLE "rol_funcion" (
"codrol_funcion" int4 DEFAULT nextval('rol_funcion_codrol_funcion_seq'::regclass) NOT NULL,
"rol_codrol" int4 NOT NULL,
"funcion_codfuncion" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of rol_funcion
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "socio"
-- ----------------------------
DROP TABLE "socio";
CREATE TABLE "socio" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "telf_ge"
-- ----------------------------
DROP TABLE "telf_ge";
CREATE TABLE "telf_ge" (
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
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "tipo_criterio"
-- ----------------------------
DROP TABLE "tipo_criterio";
CREATE TABLE "tipo_criterio" (
"id_tipo" int4 DEFAULT nextval('tipo_criterio_id_tipo_seq'::regclass) NOT NULL,
"tipo" varchar(17)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of tipo_criterio
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Table structure for "tipo_socio"
-- ----------------------------
DROP TABLE "tipo_socio";
CREATE TABLE "tipo_socio" (
"codtipo_socio" int4 DEFAULT nextval('tipo_socio_codtipo_socio_seq'::regclass) NOT NULL,
"nombretipo" varchar(45)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of tipo_socio
-- ----------------------------
BEGIN;
INSERT INTO "tipo_socio" VALUES ('24', 'socio');
INSERT INTO "tipo_socio" VALUES ('25', 'representante legal');
COMMIT;

-- ----------------------------
-- Table structure for "user_rol"
-- ----------------------------
DROP TABLE "user_rol";
CREATE TABLE "user_rol" (
"coduser_rol" int4 DEFAULT nextval('user_rol_coduser_rol_seq'::regclass) NOT NULL,
"usuario_idusuario" int4 NOT NULL,
"rol_codrol" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of user_rol
-- ----------------------------
BEGIN;
INSERT INTO "user_rol" VALUES ('77', '87', '88');
INSERT INTO "user_rol" VALUES ('78', '88', '90');
INSERT INTO "user_rol" VALUES ('79', '89', '89');
COMMIT;

-- ----------------------------
-- Table structure for "usuario"
-- ----------------------------
DROP TABLE "usuario";
CREATE TABLE "usuario" (
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
BEGIN;
INSERT INTO "usuario" VALUES ('87', 'admin', '$2y$10$P6q7K/hYft0kVnQBJ/cc4ehNtneWHZ1wBH/g2j8MremVq9p2D8LD6', 't', 'Q7cChvc5A3aCiUljchM5ymFmUKxKOMHHYQdbPi9DEVR5H3t3LmiQVEwxF5O9');
INSERT INTO "usuario" VALUES ('88', 'workathome', '$2y$10$ofwVR0T2r7.PGY3lVpPyn.tSeJXkrrk/66dvV1KtVeKnd1EgqUqgS', 't', '0ymjRvm8bvyRBvlqX5vl6TMtILa82XQqE2oCqkCbL1CDKH56FBWDvJ58dTnB');
INSERT INTO "usuario" VALUES ('89', 'leticia', '$2y$10$sViAU1FyyiA9qfUvXqKSS.3qgC6LWVbeLqDnqw8SH32PuLlKBOMYS', 't', 'IdfZ4jGAsa6I5Zx7GzCgz8GKpsgChvuNJ8ioUQTPIAggGg2OyvrHiQ59av8j');
COMMIT;

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------
ALTER SEQUENCE "app_codapp_seq" OWNED BY "app"."codapp";
ALTER SEQUENCE "calendario_codcalendario_seq" OWNED BY "calendario"."codcalendario";
ALTER SEQUENCE "cons_actividad_codcons_actividad_seq" OWNED BY "cons_actividad"."codcons_actividad";
ALTER SEQUENCE "cons_documento_idcons_documento_seq" OWNED BY "cons_documento"."idcons_documento";
ALTER SEQUENCE "consultor_idconsultor_seq" OWNED BY "consultor"."idconsultor";
ALTER SEQUENCE "criterio_id_criterio_seq" OWNED BY "criterio"."id_criterio";
ALTER SEQUENCE "detalle_cons_iddetalle_cons_seq" OWNED BY "detalle_cons"."iddetalle_cons";
ALTER SEQUENCE "detalle_criterio_iddetalle_criterio_seq" OWNED BY "detalle_criterio"."iddetalle_criterio";
ALTER SEQUENCE "detalle_ge_iddetalle_ge_seq" OWNED BY "detalle_ge"."iddetalle_ge";
ALTER SEQUENCE "documentospublicos_codpublico_seq" OWNED BY "documentospublicos"."codpublico";
ALTER SEQUENCE "evaluacion_final_codevaluacion_final_seq" OWNED BY "evaluacion_final"."codevaluacion_final";
ALTER SEQUENCE "evaluacion_semanal_codevaluacion_semanal_seq" OWNED BY "evaluacion_semanal"."codevaluacion_semanal";
ALTER SEQUENCE "foro_codforo_seq" OWNED BY "foro"."codforo";
ALTER SEQUENCE "funcion_app_codfuncion_app_seq" OWNED BY "funcion_app"."codfuncion_app";
ALTER SEQUENCE "funcion_codfuncion_seq" OWNED BY "funcion"."codfuncion";
ALTER SEQUENCE "ge_documento_idge_documento_seq" OWNED BY "ge_documento"."idge_documento";
ALTER SEQUENCE "gestion_id_gestion_seq" OWNED BY "gestion"."id_gestion";
ALTER SEQUENCE "grupo_empresa_codgrupo_empresa_seq" OWNED BY "grupo_empresa"."codgrupo_empresa";
ALTER SEQUENCE "pago_consultor_codpago_consultor_seq" OWNED BY "pago_consultor"."codpago_consultor";
ALTER SEQUENCE "plandepagos_codplandepagos_seq" OWNED BY "plandepagos"."codplandepagos";
ALTER SEQUENCE "planpago_entregables_codplanpago_entregables_seq" OWNED BY "planpago_entregables"."codplanpago_entregables";
ALTER SEQUENCE "propuestapago_codpropuestapago_seq" OWNED BY "propuestapago"."codpropuestapago";
ALTER SEQUENCE "proyecto_gestion_id_gestion_seq" OWNED BY "proyecto"."gestion_id_gestion";
ALTER SEQUENCE "registro_evaluacion_final_idregistro_evaluacion_final_seq" OWNED BY "registro_evaluacion_final"."idregistro_evaluacion_final";
ALTER SEQUENCE "repuesta_actividad_codrepuesta_actividad_seq" OWNED BY "repuesta_actividad"."codrepuesta_actividad";
ALTER SEQUENCE "rol_codrol_seq" OWNED BY "rol"."codrol";
ALTER SEQUENCE "rol_funcion_codrol_funcion_seq" OWNED BY "rol_funcion"."codrol_funcion";
ALTER SEQUENCE "socio_idsocio_seq" OWNED BY "socio"."idsocio";
ALTER SEQUENCE "telf_ge_idtelf_ge_seq" OWNED BY "telf_ge"."idtelf_ge";
ALTER SEQUENCE "tipo_criterio_id_tipo_seq" OWNED BY "tipo_criterio"."id_tipo";
ALTER SEQUENCE "tipo_socio_codtipo_socio_seq" OWNED BY "tipo_socio"."codtipo_socio";
ALTER SEQUENCE "user_rol_coduser_rol_seq" OWNED BY "user_rol"."coduser_rol";
ALTER SEQUENCE "usuario_idusuario_seq" OWNED BY "usuario"."idusuario";

-- ----------------------------
-- Primary Key structure for table "app"
-- ----------------------------
ALTER TABLE "app" ADD PRIMARY KEY ("codapp");

-- ----------------------------
-- Primary Key structure for table "calendario"
-- ----------------------------
ALTER TABLE "calendario" ADD PRIMARY KEY ("codcalendario", "grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "cons_actividad"
-- ----------------------------
ALTER TABLE "cons_actividad" ADD PRIMARY KEY ("codcons_actividad", "consultor_usuario_idusuario", "consultor_idconsultor");

-- ----------------------------
-- Primary Key structure for table "cons_documento"
-- ----------------------------
ALTER TABLE "cons_documento" ADD PRIMARY KEY ("idcons_documento");

-- ----------------------------
-- Uniques structure for table "consultor"
-- ----------------------------
ALTER TABLE "consultor" ADD UNIQUE ("idconsultor");

-- ----------------------------
-- Primary Key structure for table "consultor"
-- ----------------------------
ALTER TABLE "consultor" ADD PRIMARY KEY ("idconsultor", "usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "consultor_proyecto_grupo_empresa"
-- ----------------------------
ALTER TABLE "consultor_proyecto_grupo_empresa" ADD PRIMARY KEY ("codconsultor_proyecto_grupo_empresa");

-- ----------------------------
-- Primary Key structure for table "criterio"
-- ----------------------------
ALTER TABLE "criterio" ADD PRIMARY KEY ("id_criterio", "tipo_criterio_id_tipo", "registro_evaluacion_final_proyecto_codproyecto", "registro_evaluacion_final_consultor_idconsultor", "registro_evaluacion_final_consultor_usuario_idusuario", "registro_evaluacion_final_idregistro_evaluacion_final");

-- ----------------------------
-- Primary Key structure for table "detalle_cons"
-- ----------------------------
ALTER TABLE "detalle_cons" ADD PRIMARY KEY ("iddetalle_cons", "consultor_idconsultor", "detalle_ge_evaluacion_semanal_codevaluacion_semanal", "detalle_ge_evaluacion_semanal_calendario_codcalendario", "detalle_ge_evaluacion_semanal_calendario_grupo_empresa_codgrupo", "detalle_ge_evaluacion_semanal_calendario_grupo_empresa_usuario_", "detalle_ge_iddetalle_ge");

-- ----------------------------
-- Primary Key structure for table "detalle_criterio"
-- ----------------------------
ALTER TABLE "detalle_criterio" ADD PRIMARY KEY ("iddetalle_criterio", "criterio_registro_evaluacion_final_idregistro_evaluacion_final", "criterio_registro_evaluacion_final_consultor_usuario_idusuario", "criterio_registro_evaluacion_final_consultor_idconsultor", "criterio_registro_evaluacion_final_proyecto_codproyecto", "criterio_tipo_criterio_id_tipo", "criterio_id_criterio");

-- ----------------------------
-- Primary Key structure for table "detalle_ge"
-- ----------------------------
ALTER TABLE "detalle_ge" ADD PRIMARY KEY ("iddetalle_ge", "evaluacion_semanal_calendario_grupo_empresa_usuario_idusuario", "evaluacion_semanal_calendario_grupo_empresa_codgrupo_empresa", "evaluacion_semanal_calendario_codcalendario", "evaluacion_semanal_codevaluacion_semanal");

-- ----------------------------
-- Primary Key structure for table "documentospublicos"
-- ----------------------------
ALTER TABLE "documentospublicos" ADD PRIMARY KEY ("codpublico");

-- ----------------------------
-- Primary Key structure for table "entregables"
-- ----------------------------
ALTER TABLE "entregables" ADD PRIMARY KEY ("codentregables", "hito_pagable_plan_pago_calendario_grupo_empresa_usuario_idusuar", "hito_pagable_plan_pago_calendario_grupo_empresa_codgrupo_empres", "hito_pagable_plan_pago_calendario_codcalendario", "hito_pagable_plan_pago_codplan_pago", "hito_pagable_codhito_pagable");

-- ----------------------------
-- Primary Key structure for table "evaluacion_final"
-- ----------------------------
ALTER TABLE "evaluacion_final" ADD PRIMARY KEY ("codevaluacion_final", "grupo_empresa_usuario_idusuario", "grupo_empresa_codgrupo_empresa", "detalle_criterio_criterio_id_criterio", "detalle_criterio_criterio_tipo_criterio_id_tipo", "detalle_criterio_criterio_registro_evaluacion_final_proyecto_co", "detalle_criterio_criterio_registro_evaluacion_final_consultor_i", "detalle_criterio_criterio_registro_evaluacion_final_consultor_u", "detalle_criterio_criterio_registro_evaluacion_final_idregistro_", "detalle_criterio_iddetalle_criterio");

-- ----------------------------
-- Primary Key structure for table "evaluacion_semanal"
-- ----------------------------
ALTER TABLE "evaluacion_semanal" ADD PRIMARY KEY ("codevaluacion_semanal", "calendario_codcalendario", "calendario_grupo_empresa_codgrupo_empresa", "calendario_grupo_empresa_usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "foro"
-- ----------------------------
ALTER TABLE "foro" ADD PRIMARY KEY ("codforo");

-- ----------------------------
-- Primary Key structure for table "funcion"
-- ----------------------------
ALTER TABLE "funcion" ADD PRIMARY KEY ("codfuncion");

-- ----------------------------
-- Primary Key structure for table "funcion_app"
-- ----------------------------
ALTER TABLE "funcion_app" ADD PRIMARY KEY ("codfuncion_app", "app_codapp", "funcion_codfuncion");

-- ----------------------------
-- Primary Key structure for table "ge_documento"
-- ----------------------------
ALTER TABLE "ge_documento" ADD PRIMARY KEY ("idge_documento", "grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "gestion"
-- ----------------------------
ALTER TABLE "gestion" ADD PRIMARY KEY ("id_gestion");

-- ----------------------------
-- Uniques structure for table "grupo_empresa"
-- ----------------------------
ALTER TABLE "grupo_empresa" ADD UNIQUE ("nombrelargoge");

-- ----------------------------
-- Primary Key structure for table "grupo_empresa"
-- ----------------------------
ALTER TABLE "grupo_empresa" ADD PRIMARY KEY ("codgrupo_empresa", "usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "hito_pagable"
-- ----------------------------
ALTER TABLE "hito_pagable" ADD PRIMARY KEY ("codhito_pagable", "plan_pago_codplan_pago", "plan_pago_calendario_codcalendario", "plan_pago_calendario_grupo_empresa_codgrupo_empresa", "plan_pago_calendario_grupo_empresa_usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "pago_consultor"
-- ----------------------------
ALTER TABLE "pago_consultor" ADD PRIMARY KEY ("codpago_consultor", "consultor_idconsultor", "consultor_usuario_idusuario", "hito_pagable_plan_pago_codplan_pago", "hito_pagable_codhito_pagable", "hito_pagable_plan_pago_calendario_grupo_empresa_usuario_idusuar", "hito_pagable_plan_pago_calendario_grupo_empresa_codgrupo_empres", "hito_pagable_plan_pago_calendario_codcalendario");

-- ----------------------------
-- Primary Key structure for table "plan_pago"
-- ----------------------------
ALTER TABLE "plan_pago" ADD PRIMARY KEY ("codplan_pago", "calendario_codcalendario", "calendario_grupo_empresa_codgrupo_empresa", "calendario_grupo_empresa_usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "plandepagos"
-- ----------------------------
ALTER TABLE "plandepagos" ADD PRIMARY KEY ("codplandepagos", "propuestapago_grupo_empresa_codgrupo_empresa", "propuestapago_grupo_empresa_usuario_idusuario", "propuestapago_codpropuestapago");

-- ----------------------------
-- Primary Key structure for table "planpago_entregables"
-- ----------------------------
ALTER TABLE "planpago_entregables" ADD PRIMARY KEY ("codplanpago_entregables", "plandepagos_propuestapago_codpropuestapago", "plandepagos_propuestapago_grupo_empresa_usuario_idusuario", "plandepagos_propuestapago_grupo_empresa_codgrupo_empresa", "plandepagos_codplandepagos");

-- ----------------------------
-- Primary Key structure for table "propuestapago"
-- ----------------------------
ALTER TABLE "propuestapago" ADD PRIMARY KEY ("codpropuestapago", "grupo_empresa_usuario_idusuario", "grupo_empresa_codgrupo_empresa");

-- ----------------------------
-- Primary Key structure for table "proyecto"
-- ----------------------------
ALTER TABLE "proyecto" ADD PRIMARY KEY ("codproyecto");

-- ----------------------------
-- Primary Key structure for table "registro_evaluacion_final"
-- ----------------------------
ALTER TABLE "registro_evaluacion_final" ADD PRIMARY KEY ("idregistro_evaluacion_final", "consultor_usuario_idusuario", "consultor_idconsultor", "proyecto_codproyecto");

-- ----------------------------
-- Primary Key structure for table "registros"
-- ----------------------------
ALTER TABLE "registros" ADD PRIMARY KEY ("codhito", "codentregable");

-- ----------------------------
-- Primary Key structure for table "repuesta_actividad"
-- ----------------------------
ALTER TABLE "repuesta_actividad" ADD PRIMARY KEY ("codrepuesta_actividad", "cons_actividad_consultor_idconsultor", "cons_actividad_consultor_usuario_idusuario", "cons_actividad_codcons_actividad", "ge_documento_grupo_empresa_usuario_idusuario", "ge_documento_grupo_empresa_codgrupo_empresa", "ge_documento_idge_documento");

-- ----------------------------
-- Primary Key structure for table "rol"
-- ----------------------------
ALTER TABLE "rol" ADD PRIMARY KEY ("codrol");

-- ----------------------------
-- Primary Key structure for table "rol_funcion"
-- ----------------------------
ALTER TABLE "rol_funcion" ADD PRIMARY KEY ("codrol_funcion", "rol_codrol", "funcion_codfuncion");

-- ----------------------------
-- Primary Key structure for table "socio"
-- ----------------------------
ALTER TABLE "socio" ADD PRIMARY KEY ("idsocio");

-- ----------------------------
-- Primary Key structure for table "telf_ge"
-- ----------------------------
ALTER TABLE "telf_ge" ADD PRIMARY KEY ("idtelf_ge", "grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "tipo_criterio"
-- ----------------------------
ALTER TABLE "tipo_criterio" ADD PRIMARY KEY ("id_tipo");

-- ----------------------------
-- Primary Key structure for table "tipo_socio"
-- ----------------------------
ALTER TABLE "tipo_socio" ADD PRIMARY KEY ("codtipo_socio");

-- ----------------------------
-- Primary Key structure for table "user_rol"
-- ----------------------------
ALTER TABLE "user_rol" ADD PRIMARY KEY ("coduser_rol", "usuario_idusuario", "rol_codrol");

-- ----------------------------
-- Uniques structure for table "usuario"
-- ----------------------------
ALTER TABLE "usuario" ADD UNIQUE ("login");

-- ----------------------------
-- Primary Key structure for table "usuario"
-- ----------------------------
ALTER TABLE "usuario" ADD PRIMARY KEY ("idusuario");

-- ----------------------------
-- Foreign Key structure for table "calendario"
-- ----------------------------
ALTER TABLE "calendario" ADD FOREIGN KEY ("grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") REFERENCES "grupo_empresa" ("codgrupo_empresa", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "cons_actividad"
-- ----------------------------
ALTER TABLE "cons_actividad" ADD FOREIGN KEY ("consultor_idconsultor", "consultor_usuario_idusuario") REFERENCES "consultor" ("idconsultor", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "cons_documento"
-- ----------------------------
ALTER TABLE "cons_documento" ADD FOREIGN KEY ("consultor_idconsultor", "consultor_usuario_idusuario") REFERENCES "consultor" ("idconsultor", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "consultor"
-- ----------------------------
ALTER TABLE "consultor" ADD FOREIGN KEY ("usuario_idusuario") REFERENCES "usuario" ("idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "consultor_proyecto_grupo_empresa"
-- ----------------------------
ALTER TABLE "consultor_proyecto_grupo_empresa" ADD FOREIGN KEY ("grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") REFERENCES "grupo_empresa" ("codgrupo_empresa", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "consultor_proyecto_grupo_empresa" ADD FOREIGN KEY ("proyecto_codproyecto") REFERENCES "proyecto" ("codproyecto") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "criterio"
-- ----------------------------
ALTER TABLE "criterio" ADD FOREIGN KEY ("registro_evaluacion_final_idregistro_evaluacion_final", "registro_evaluacion_final_consultor_usuario_idusuario", "registro_evaluacion_final_consultor_idconsultor", "registro_evaluacion_final_proyecto_codproyecto") REFERENCES "registro_evaluacion_final" ("idregistro_evaluacion_final", "consultor_usuario_idusuario", "consultor_idconsultor", "proyecto_codproyecto") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "criterio" ADD FOREIGN KEY ("tipo_criterio_id_tipo") REFERENCES "tipo_criterio" ("id_tipo") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "detalle_cons"
-- ----------------------------
ALTER TABLE "detalle_cons" ADD FOREIGN KEY ("consultor_idconsultor") REFERENCES "consultor" ("idconsultor") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "detalle_cons" ADD FOREIGN KEY ("detalle_ge_iddetalle_ge", "detalle_ge_evaluacion_semanal_calendario_grupo_empresa_usuario_", "detalle_ge_evaluacion_semanal_calendario_grupo_empresa_codgrupo", "detalle_ge_evaluacion_semanal_calendario_codcalendario", "detalle_ge_evaluacion_semanal_codevaluacion_semanal") REFERENCES "detalle_ge" ("iddetalle_ge", "evaluacion_semanal_calendario_grupo_empresa_usuario_idusuario", "evaluacion_semanal_calendario_grupo_empresa_codgrupo_empresa", "evaluacion_semanal_calendario_codcalendario", "evaluacion_semanal_codevaluacion_semanal") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "detalle_criterio"
-- ----------------------------
ALTER TABLE "detalle_criterio" ADD FOREIGN KEY ("criterio_id_criterio", "criterio_tipo_criterio_id_tipo", "criterio_registro_evaluacion_final_proyecto_codproyecto", "criterio_registro_evaluacion_final_consultor_idconsultor", "criterio_registro_evaluacion_final_consultor_usuario_idusuario", "criterio_registro_evaluacion_final_idregistro_evaluacion_final") REFERENCES "criterio" ("id_criterio", "tipo_criterio_id_tipo", "registro_evaluacion_final_proyecto_codproyecto", "registro_evaluacion_final_consultor_idconsultor", "registro_evaluacion_final_consultor_usuario_idusuario", "registro_evaluacion_final_idregistro_evaluacion_final") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "detalle_ge"
-- ----------------------------
ALTER TABLE "detalle_ge" ADD FOREIGN KEY ("evaluacion_semanal_codevaluacion_semanal", "evaluacion_semanal_calendario_codcalendario", "evaluacion_semanal_calendario_grupo_empresa_codgrupo_empresa", "evaluacion_semanal_calendario_grupo_empresa_usuario_idusuario") REFERENCES "evaluacion_semanal" ("codevaluacion_semanal", "calendario_codcalendario", "calendario_grupo_empresa_codgrupo_empresa", "calendario_grupo_empresa_usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "entregables"
-- ----------------------------
ALTER TABLE "entregables" ADD FOREIGN KEY ("hito_pagable_codhito_pagable", "hito_pagable_plan_pago_codplan_pago", "hito_pagable_plan_pago_calendario_codcalendario", "hito_pagable_plan_pago_calendario_grupo_empresa_codgrupo_empres", "hito_pagable_plan_pago_calendario_grupo_empresa_usuario_idusuar") REFERENCES "hito_pagable" ("codhito_pagable", "plan_pago_codplan_pago", "plan_pago_calendario_codcalendario", "plan_pago_calendario_grupo_empresa_codgrupo_empresa", "plan_pago_calendario_grupo_empresa_usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "evaluacion_final"
-- ----------------------------
ALTER TABLE "evaluacion_final" ADD FOREIGN KEY ("detalle_criterio_iddetalle_criterio", "detalle_criterio_criterio_registro_evaluacion_final_idregistro_", "detalle_criterio_criterio_registro_evaluacion_final_consultor_u", "detalle_criterio_criterio_registro_evaluacion_final_consultor_i", "detalle_criterio_criterio_registro_evaluacion_final_proyecto_co", "detalle_criterio_criterio_tipo_criterio_id_tipo", "detalle_criterio_criterio_id_criterio") REFERENCES "detalle_criterio" ("iddetalle_criterio", "criterio_registro_evaluacion_final_idregistro_evaluacion_final", "criterio_registro_evaluacion_final_consultor_usuario_idusuario", "criterio_registro_evaluacion_final_consultor_idconsultor", "criterio_registro_evaluacion_final_proyecto_codproyecto", "criterio_tipo_criterio_id_tipo", "criterio_id_criterio") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "evaluacion_final" ADD FOREIGN KEY ("grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") REFERENCES "grupo_empresa" ("codgrupo_empresa", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "evaluacion_semanal"
-- ----------------------------
ALTER TABLE "evaluacion_semanal" ADD FOREIGN KEY ("calendario_codcalendario", "calendario_grupo_empresa_codgrupo_empresa", "calendario_grupo_empresa_usuario_idusuario") REFERENCES "calendario" ("codcalendario", "grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "funcion_app"
-- ----------------------------
ALTER TABLE "funcion_app" ADD FOREIGN KEY ("funcion_codfuncion") REFERENCES "funcion" ("codfuncion") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "funcion_app" ADD FOREIGN KEY ("app_codapp") REFERENCES "app" ("codapp") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "ge_documento"
-- ----------------------------
ALTER TABLE "ge_documento" ADD FOREIGN KEY ("grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") REFERENCES "grupo_empresa" ("codgrupo_empresa", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "grupo_empresa"
-- ----------------------------
ALTER TABLE "grupo_empresa" ADD FOREIGN KEY ("usuario_idusuario") REFERENCES "usuario" ("idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "hito_pagable"
-- ----------------------------
ALTER TABLE "hito_pagable" ADD FOREIGN KEY ("plan_pago_codplan_pago", "plan_pago_calendario_grupo_empresa_usuario_idusuario", "plan_pago_calendario_grupo_empresa_codgrupo_empresa", "plan_pago_calendario_codcalendario") REFERENCES "plan_pago" ("codplan_pago", "calendario_codcalendario", "calendario_grupo_empresa_codgrupo_empresa", "calendario_grupo_empresa_usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "pago_consultor"
-- ----------------------------
ALTER TABLE "pago_consultor" ADD FOREIGN KEY ("hito_pagable_codhito_pagable", "hito_pagable_plan_pago_codplan_pago", "hito_pagable_plan_pago_calendario_codcalendario", "hito_pagable_plan_pago_calendario_grupo_empresa_codgrupo_empres", "hito_pagable_plan_pago_calendario_grupo_empresa_usuario_idusuar") REFERENCES "hito_pagable" ("codhito_pagable", "plan_pago_codplan_pago", "plan_pago_calendario_codcalendario", "plan_pago_calendario_grupo_empresa_codgrupo_empresa", "plan_pago_calendario_grupo_empresa_usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "pago_consultor" ADD FOREIGN KEY ("consultor_idconsultor", "consultor_usuario_idusuario") REFERENCES "consultor" ("idconsultor", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "plan_pago"
-- ----------------------------
ALTER TABLE "plan_pago" ADD FOREIGN KEY ("calendario_codcalendario", "calendario_grupo_empresa_codgrupo_empresa", "calendario_grupo_empresa_usuario_idusuario") REFERENCES "calendario" ("codcalendario", "grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "plandepagos"
-- ----------------------------
ALTER TABLE "plandepagos" ADD FOREIGN KEY ("propuestapago_grupo_empresa_usuario_idusuario", "propuestapago_grupo_empresa_codgrupo_empresa", "propuestapago_codpropuestapago") REFERENCES "propuestapago" ("codpropuestapago", "grupo_empresa_usuario_idusuario", "grupo_empresa_codgrupo_empresa") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "planpago_entregables"
-- ----------------------------
ALTER TABLE "planpago_entregables" ADD FOREIGN KEY ("plandepagos_propuestapago_grupo_empresa_codgrupo_empresa", "plandepagos_propuestapago_grupo_empresa_usuario_idusuario", "plandepagos_propuestapago_codpropuestapago", "plandepagos_codplandepagos") REFERENCES "plandepagos" ("codplandepagos", "propuestapago_grupo_empresa_codgrupo_empresa", "propuestapago_grupo_empresa_usuario_idusuario", "propuestapago_codpropuestapago") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "propuestapago"
-- ----------------------------
ALTER TABLE "propuestapago" ADD FOREIGN KEY ("grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") REFERENCES "grupo_empresa" ("codgrupo_empresa", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "proyecto"
-- ----------------------------
ALTER TABLE "proyecto" ADD FOREIGN KEY ("gestion_id_gestion") REFERENCES "gestion" ("id_gestion") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "proyecto" ADD FOREIGN KEY ("consultor_usuario_idusuario", "consultor_idconsultor") REFERENCES "consultor" ("idconsultor", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "repuesta_actividad"
-- ----------------------------
ALTER TABLE "repuesta_actividad" ADD FOREIGN KEY ("cons_actividad_codcons_actividad", "cons_actividad_consultor_usuario_idusuario", "cons_actividad_consultor_idconsultor") REFERENCES "cons_actividad" ("codcons_actividad", "consultor_usuario_idusuario", "consultor_idconsultor") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "repuesta_actividad" ADD FOREIGN KEY ("ge_documento_idge_documento", "ge_documento_grupo_empresa_codgrupo_empresa", "ge_documento_grupo_empresa_usuario_idusuario") REFERENCES "ge_documento" ("idge_documento", "grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "rol_funcion"
-- ----------------------------
ALTER TABLE "rol_funcion" ADD FOREIGN KEY ("rol_codrol") REFERENCES "rol" ("codrol") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "rol_funcion" ADD FOREIGN KEY ("funcion_codfuncion") REFERENCES "funcion" ("codfuncion") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "socio"
-- ----------------------------
ALTER TABLE "socio" ADD FOREIGN KEY ("grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") REFERENCES "grupo_empresa" ("codgrupo_empresa", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "socio" ADD FOREIGN KEY ("tipo_socio_codtipo_socio") REFERENCES "tipo_socio" ("codtipo_socio") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "telf_ge"
-- ----------------------------
ALTER TABLE "telf_ge" ADD FOREIGN KEY ("grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario") REFERENCES "grupo_empresa" ("codgrupo_empresa", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "user_rol"
-- ----------------------------
ALTER TABLE "user_rol" ADD FOREIGN KEY ("usuario_idusuario") REFERENCES "usuario" ("idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "user_rol" ADD FOREIGN KEY ("rol_codrol") REFERENCES "rol" ("codrol") ON DELETE NO ACTION ON UPDATE NO ACTION;
