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

Date: 2014-12-04 13:26:18
*/


-- ----------------------------
-- Sequence structure for "public"."actividad_cod_actividad_seq"
-- ----------------------------
DROP SEQUENCE "public"."actividad_cod_actividad_seq";
CREATE SEQUENCE "public"."actividad_cod_actividad_seq"
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
 START 5
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."cons_documento_idcons_documento_seq"
-- ----------------------------
DROP SEQUENCE "public"."cons_documento_idcons_documento_seq";
CREATE SEQUENCE "public"."cons_documento_idcons_documento_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 15
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."consultor_idconsultor_seq"
-- ----------------------------
DROP SEQUENCE "public"."consultor_idconsultor_seq";
CREATE SEQUENCE "public"."consultor_idconsultor_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 36
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em"
-- ----------------------------
DROP SEQUENCE "public"."consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em";
CREATE SEQUENCE "public"."consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 12
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."consultor_proyecto_grupo_empresa_grupo_empresa_usuario_idusuari"
-- ----------------------------
DROP SEQUENCE "public"."consultor_proyecto_grupo_empresa_grupo_empresa_usuario_idusuari";
CREATE SEQUENCE "public"."consultor_proyecto_grupo_empresa_grupo_empresa_usuario_idusuari"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
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
-- Sequence structure for "public"."evaluacion_final_criterio_evaluacion_final_id_seq"
-- ----------------------------
DROP SEQUENCE "public"."evaluacion_final_criterio_evaluacion_final_id_seq";
CREATE SEQUENCE "public"."evaluacion_final_criterio_evaluacion_final_id_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."avance_semanal_codavance_semanal_seq"
-- ----------------------------
DROP SEQUENCE "public"."avance_semanal_codavance_semanal_seq";
CREATE SEQUENCE "public"."avance_semanal_codavance_semanal_seq"
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
-- Sequence structure for "public"."gestion_id_gestion_seq"
-- ----------------------------
DROP SEQUENCE "public"."gestion_id_gestion_seq";
CREATE SEQUENCE "public"."gestion_id_gestion_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 23
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."grupo_empresa_codgrupo_empresa_seq"
-- ----------------------------
DROP SEQUENCE "public"."grupo_empresa_codgrupo_empresa_seq";
CREATE SEQUENCE "public"."grupo_empresa_codgrupo_empresa_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 51
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."id_documento_actividad_seq"
-- ----------------------------
DROP SEQUENCE "public"."id_documento_actividad_seq";
CREATE SEQUENCE "public"."id_documento_actividad_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 4
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
-- Sequence structure for "public"."proyecto_codproyecto_seq"
-- ----------------------------
DROP SEQUENCE "public"."proyecto_codproyecto_seq";
CREATE SEQUENCE "public"."proyecto_codproyecto_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 35
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."proyecto_documento_id_proyecto_documento_seq"
-- ----------------------------
DROP SEQUENCE "public"."proyecto_documento_id_proyecto_documento_seq";
CREATE SEQUENCE "public"."proyecto_documento_id_proyecto_documento_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 5
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."proyecto_gestion_id_gestion_seq"
-- ----------------------------
DROP SEQUENCE "public"."proyecto_gestion_id_gestion_seq";
CREATE SEQUENCE "public"."proyecto_gestion_id_gestion_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 1
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."respuesta_id_respuesta_seq"
-- ----------------------------
DROP SEQUENCE "public"."respuesta_id_respuesta_seq";
CREATE SEQUENCE "public"."respuesta_id_respuesta_seq"
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
 START 178
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."semestre_id_semestre_seq"
-- ----------------------------
DROP SEQUENCE "public"."semestre_id_semestre_seq";
CREATE SEQUENCE "public"."semestre_id_semestre_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 8
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."socio_idsocio_seq"
-- ----------------------------
DROP SEQUENCE "public"."socio_idsocio_seq";
CREATE SEQUENCE "public"."socio_idsocio_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 7
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
-- Sequence structure for "public"."tipo_socio_codtipo_socio_seq"
-- ----------------------------
DROP SEQUENCE "public"."tipo_socio_codtipo_socio_seq";
CREATE SEQUENCE "public"."tipo_socio_codtipo_socio_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 68
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."user_rol_coduser_rol_seq"
-- ----------------------------
DROP SEQUENCE "public"."user_rol_coduser_rol_seq";
CREATE SEQUENCE "public"."user_rol_coduser_rol_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 160
 CACHE 1;

-- ----------------------------
-- Sequence structure for "public"."usuario_idusuario_seq"
-- ----------------------------
DROP SEQUENCE "public"."usuario_idusuario_seq";
CREATE SEQUENCE "public"."usuario_idusuario_seq"
 INCREMENT 1
 MINVALUE 1
 MAXVALUE 9223372036854775807
 START 170
 CACHE 1;

-- ----------------------------
-- Table structure for "public"."actividad"
-- ----------------------------
DROP TABLE "public"."actividad";
CREATE TABLE "public"."actividad" (
"cod_actividad" int4 DEFAULT nextval('cons_actividad_codcons_actividad_seq'::regclass) NOT NULL,
"fechainicio" timestamp(6),
"fechafin" timestamp(6),
"titulo" varchar(40),
"descripcion" text,
"contestada" bool,
"consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em" int4 NOT NULL,
"updated_at" timestamp(6),
"created_at" timestamp(6),
"requiere_respuesta" bool
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of actividad
-- ----------------------------
INSERT INTO "public"."actividad" VALUES ('5', '2014-12-04 00:00:00', '2014-12-01 00:00:00', 'Subir Parte A', 'Las grupo empresas deben subir la parte A, de la propuesta', 'f', '12', '2014-12-04 04:48:47', '2014-12-04 04:48:47', 't');

-- ----------------------------
-- Table structure for "public"."calendario"
-- ----------------------------
DROP TABLE "public"."calendario";
CREATE TABLE "public"."calendario" (
"codcalendario" int4 DEFAULT nextval('calendario_codcalendario_seq'::regclass) NOT NULL,
"dia_reunion_fijado" bool DEFAULT false,
"codconsultor_proyecto_grupo_empresa" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of calendario
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
INSERT INTO "public"."consultor" VALUES ('36', '170', 'Maria Leticia', 'leticia@memi.ums.edu.bo', '74314297', 'Blanco', 'Coca', '/img/foto_consultor/20141106024403_leticia.jpg');

-- ----------------------------
-- Table structure for "public"."consultor_proyecto_grupo_empresa"
-- ----------------------------
DROP TABLE "public"."consultor_proyecto_grupo_empresa";
CREATE TABLE "public"."consultor_proyecto_grupo_empresa" (
"grupo_empresa_codgrupo_empresa" int4 NOT NULL,
"proyecto_codproyecto" int4 NOT NULL,
"codconsultor_proyecto_grupo_empresa" int4 DEFAULT nextval('consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em'::regclass) NOT NULL,
"grupo_empresa_usuario_idusuario" int4 NOT NULL,
"consultor_idconsultor" int4 NOT NULL,
"created_at" timestamp(6) NOT NULL,
"updated_at" timestamp(6) NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of consultor_proyecto_grupo_empresa
-- ----------------------------
INSERT INTO "public"."consultor_proyecto_grupo_empresa" VALUES ('51', '35', '12', '169', '36', '2014-12-04 04:48:47', '2014-12-04 04:48:47');

-- ----------------------------
-- Table structure for "public"."criterio"
-- ----------------------------
DROP TABLE "public"."criterio";
CREATE TABLE "public"."criterio" (
"id_criterio" int4 DEFAULT nextval('criterio_id_criterio_seq'::regclass) NOT NULL,
"nombre" varchar(100),
"porcentaje_calificacion" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of criterio
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."documento_actividad"
-- ----------------------------
DROP TABLE "public"."documento_actividad";
CREATE TABLE "public"."documento_actividad" (
"id_documento_actividad" int4 DEFAULT nextval('id_documento_actividad_seq'::regclass) NOT NULL,
"nombre_documento_actividad" varchar(50),
"pathdocumento_actividad" text,
"actividad_cod_actividad" int4 NOT NULL,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"is_consultor" bool DEFAULT true NOT NULL,
"id_grupo_empresa" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of documento_actividad
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
-- Table structure for "public"."evaluacion_final"
-- ----------------------------
DROP TABLE "public"."evaluacion_final";
CREATE TABLE "public"."evaluacion_final" (
"codevaluacion_final" int4 DEFAULT nextval('evaluacion_final_codevaluacion_final_seq'::regclass) NOT NULL,
"codconsultor_proyecto_grupo_empresa" int4 NOT NULL,
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
-- Table structure for "public"."evaluacion_final_criterio"
-- ----------------------------
DROP TABLE "public"."evaluacion_final_criterio";
CREATE TABLE "public"."evaluacion_final_criterio" (
"evaluacion_final_id" int4 NOT NULL,
"criterio_id_criterio" int4 NOT NULL,
"porcentaje" int4,
"nombre_concepto" varchar(30)
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of evaluacion_final_criterio
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."avance_semanal"
-- ----------------------------
DROP TABLE "public"."avance_semanal";
CREATE TABLE "public"."avance_semanal" (
"codavance_semanal" int4 DEFAULT nextval('avance_semanal_codavance_semanal_seq'::regclass) NOT NULL,
"fecha" date,
"observaciones" text 
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of avance_semanal
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
-- Table structure for "public"."ge_documento"
-- ----------------------------
DROP TABLE "public"."ge_documento";
CREATE TABLE "public"."ge_documento" (
"created_at" timestamp(6),
"updated_at" timestamp(6),
"id_respuesta" int4 DEFAULT nextval('respuesta_id_respuesta_seq'::regclass) NOT NULL,
"nombre_respuesta" varchar(45),
"pathrespuesta" text,
"titulo_respuesta" varchar(45),
"descripcion_respuesta" text
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of ge_documento
-- ----------------------------

-- ----------------------------
-- Table structure for "public"."gestion"
-- ----------------------------
DROP TABLE "public"."gestion";
CREATE TABLE "public"."gestion" (
"id_gestion" int4 DEFAULT nextval('gestion_id_gestion_seq'::regclass) NOT NULL,
"nombre_gestion" varchar(25),
"anio_gestion" int4,
"semestre_id_semestre" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of gestion
-- ----------------------------
INSERT INTO "public"."gestion" VALUES ('20', null, '2014', '7');
INSERT INTO "public"."gestion" VALUES ('21', null, '2014', '8');
INSERT INTO "public"."gestion" VALUES ('22', null, '2015', '7');
INSERT INTO "public"."gestion" VALUES ('23', null, '2015', '8');

-- ----------------------------
-- Table structure for "public"."grupo_empresa"
-- ----------------------------
DROP TABLE "public"."grupo_empresa";
CREATE TABLE "public"."grupo_empresa" (
"codgrupo_empresa" int4 DEFAULT nextval('grupo_empresa_codgrupo_empresa_seq'::regclass) NOT NULL,
"usuario_idusuario" int4 NOT NULL,
"nombrelargoge" varchar(45) NOT NULL,
"nombrecortoge" varchar(45) NOT NULL,
"correoge" varchar(45) NOT NULL,
"direccionge" varchar(45) NOT NULL,
"telefonoge" int4 NOT NULL,
"logoge" varchar(100) NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of grupo_empresa
-- ----------------------------
INSERT INTO "public"."grupo_empresa" VALUES ('51', '169', 'Work At Home S.R.L.', 'WHS S.R.L.', 'workathomesoft@gmail.com', 'Av. Maria del carmen Nro S/n', '70797024', '/img/logo_grupo_empresas/20141015055355_work_at_home.png');

-- ----------------------------
-- Table structure for "public"."hito_pagable"
-- ----------------------------
DROP TABLE "public"."hito_pagable";
CREATE TABLE "public"."hito_pagable" (
"codhito_pagable" int4 NOT NULL,
"hitoevento" varchar(120),
"porcentajepago" int4,
"monto" float4,
"fechapago" date,
"plan_pago_codplan_pago" int4
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
"hitooevento" varchar(120),
"porcentajesatisfaccion" int4,
"porcentajealcazado" int4,
"montopago" float4,
"estadopago" varchar(45),
"hito_pagable_codhito_pagable" int4 NOT NULL
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
"montototal" float4,
"porcentajesatisfaccion" float4,
"calendario_codcalendario" int4
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
"fechafinproyecto" date NOT NULL,
"gestion_id_gestion" int4 NOT NULL,
"codproyecto" int4 DEFAULT nextval('proyecto_codproyecto_seq'::regclass) NOT NULL,
"nombreproyecto" varchar(120) NOT NULL,
"vigente" bool DEFAULT true NOT NULL,
"created_at" timestamp(6) NOT NULL,
"updated_at" timestamp(6) NOT NULL,
"id_consultor_log" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of proyecto
-- ----------------------------
INSERT INTO "public"."proyecto" VALUES ('2014-12-30', '20', '35', 'Apoyo TIS', 'f', '2014-12-04 04:48:47', '2014-12-04 04:48:47', '36');

-- ----------------------------
-- Table structure for "public"."proyecto_documento"
-- ----------------------------
DROP TABLE "public"."proyecto_documento";
CREATE TABLE "public"."proyecto_documento" (
"id_proyecto_documento" int4 DEFAULT nextval('proyecto_documento_id_proyecto_documento_seq'::regclass) NOT NULL,
"proyecto_codproyecto" int4 NOT NULL,
"created_at" timestamp(6) NOT NULL,
"updated_at" timestamp(6) NOT NULL,
"es_publico" bool DEFAULT true,
"path_documento" varchar(120) NOT NULL,
"titulo_documento" varchar(120) NOT NULL,
"id_consultor" int4 NOT NULL,
"nombre_proyecto_documento" varchar(50) NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of proyecto_documento
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
-- Table structure for "public"."respuesta"
-- ----------------------------
DROP TABLE "public"."respuesta";
CREATE TABLE "public"."respuesta" (
"id_respuesta" int4 DEFAULT nextval('respuesta_id_respuesta_seq'::regclass) NOT NULL,
"nombre_respuesta" varchar(45),
"titulo_respuesta" varchar(45),
"descripcion_respuesta" text,
"created_at" timestamp(6),
"updated_at" timestamp(6),
"actividad_consultor_proyecto_grupo_empresa_codconsultor_proyect" int4,
"actividad_cod_actividad" int4 NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of respuesta
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
INSERT INTO "public"."rol" VALUES ('175', 'administrador');
INSERT INTO "public"."rol" VALUES ('176', 'consultor');
INSERT INTO "public"."rol" VALUES ('177', 'grupo-empresa');
INSERT INTO "public"."rol" VALUES ('178', 'otro');

-- ----------------------------
-- Table structure for "public"."semestre"
-- ----------------------------
DROP TABLE "public"."semestre";
CREATE TABLE "public"."semestre" (
"id_semestre" int4 DEFAULT nextval('semestre_id_semestre_seq'::regclass) NOT NULL,
"numero_semestre" int4
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of semestre
-- ----------------------------
INSERT INTO "public"."semestre" VALUES ('7', '1');
INSERT INTO "public"."semestre" VALUES ('8', '2');

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
INSERT INTO "public"."tipo_socio" VALUES ('67', 'socio');
INSERT INTO "public"."tipo_socio" VALUES ('68', 'representante legal');

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
INSERT INTO "public"."user_rol" VALUES ('158', '168', '175');
INSERT INTO "public"."user_rol" VALUES ('159', '169', '177');
INSERT INTO "public"."user_rol" VALUES ('160', '170', '176');

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
INSERT INTO "public"."usuario" VALUES ('168', 'admin', '$2y$10$oc/EfVsHeEzbn7gZngKXKepvab6I82f1/wT5.qJ9zX/EA2ccWxOX.', 't', null);
INSERT INTO "public"."usuario" VALUES ('169', 'workathome', '$2y$10$nGK1FDS7NB7z2lHh.SZL.O/E1RparNIF.jOl6RiL5O5xmIdZsPUrO', 't', null);
INSERT INTO "public"."usuario" VALUES ('170', 'leticia', '$2y$10$NnklN0D4w.0d.1rryTYXx.7KG3CfyP6R4uDFmhvZoZj0wb.UHXPue', 't', null);

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------
ALTER SEQUENCE "public"."calendario_codcalendario_seq" OWNED BY "calendario"."codcalendario";
ALTER SEQUENCE "public"."cons_documento_idcons_documento_seq" OWNED BY "cons_documento"."idcons_documento";
ALTER SEQUENCE "public"."consultor_idconsultor_seq" OWNED BY "consultor"."idconsultor";
ALTER SEQUENCE "public"."criterio_id_criterio_seq" OWNED BY "criterio"."id_criterio";
ALTER SEQUENCE "public"."documentospublicos_codpublico_seq" OWNED BY "documentospublicos"."codpublico";
ALTER SEQUENCE "public"."evaluacion_final_codevaluacion_final_seq" OWNED BY "evaluacion_final"."codevaluacion_final";
ALTER SEQUENCE "public"."avance_semanal_codavance_semanal_seq" OWNED BY "avance_semanal"."codavance_semanal";
ALTER SEQUENCE "public"."foro_codforo_seq" OWNED BY "foro"."codforo";
ALTER SEQUENCE "public"."gestion_id_gestion_seq" OWNED BY "gestion"."id_gestion";
ALTER SEQUENCE "public"."grupo_empresa_codgrupo_empresa_seq" OWNED BY "grupo_empresa"."codgrupo_empresa";
ALTER SEQUENCE "public"."pago_consultor_codpago_consultor_seq" OWNED BY "pago_consultor"."codpago_consultor";
ALTER SEQUENCE "public"."plandepagos_codplandepagos_seq" OWNED BY "plandepagos"."codplandepagos";
ALTER SEQUENCE "public"."propuestapago_codpropuestapago_seq" OWNED BY "propuestapago"."codpropuestapago";
ALTER SEQUENCE "public"."proyecto_gestion_id_gestion_seq" OWNED BY "proyecto"."gestion_id_gestion";
ALTER SEQUENCE "public"."rol_codrol_seq" OWNED BY "rol"."codrol";
ALTER SEQUENCE "public"."socio_idsocio_seq" OWNED BY "socio"."idsocio";
ALTER SEQUENCE "public"."telf_ge_idtelf_ge_seq" OWNED BY "telf_ge"."idtelf_ge";
ALTER SEQUENCE "public"."tipo_socio_codtipo_socio_seq" OWNED BY "tipo_socio"."codtipo_socio";
ALTER SEQUENCE "public"."user_rol_coduser_rol_seq" OWNED BY "user_rol"."coduser_rol";
ALTER SEQUENCE "public"."usuario_idusuario_seq" OWNED BY "usuario"."idusuario";

-- ----------------------------
-- Primary Key structure for table "public"."actividad"
-- ----------------------------
ALTER TABLE "public"."actividad" ADD PRIMARY KEY ("cod_actividad");

-- ----------------------------
-- Primary Key structure for table "public"."calendario"
-- ----------------------------
ALTER TABLE "public"."calendario" ADD PRIMARY KEY ("codcalendario");

-- ----------------------------
-- Primary Key structure for table "public"."cons_documento"
-- ----------------------------
ALTER TABLE "public"."cons_documento" ADD PRIMARY KEY ("idcons_documento");

-- ----------------------------
-- Uniques structure for table "public"."consultor"
-- ----------------------------
ALTER TABLE "public"."consultor" ADD UNIQUE ("idconsultor");

-- ----------------------------
-- Checks structure for table "public"."consultor"
-- ----------------------------
ALTER TABLE "public"."consultor" ADD CHECK ((telefonoconsultor >= 4000000) AND (telefonoconsultor <= 79999999));

-- ----------------------------
-- Primary Key structure for table "public"."consultor"
-- ----------------------------
ALTER TABLE "public"."consultor" ADD PRIMARY KEY ("idconsultor", "usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "public"."consultor_proyecto_grupo_empresa"
-- ----------------------------
ALTER TABLE "public"."consultor_proyecto_grupo_empresa" ADD PRIMARY KEY ("codconsultor_proyecto_grupo_empresa");

-- ----------------------------
-- Primary Key structure for table "public"."criterio"
-- ----------------------------
ALTER TABLE "public"."criterio" ADD PRIMARY KEY ("id_criterio");

-- ----------------------------
-- Primary Key structure for table "public"."documento_actividad"
-- ----------------------------
ALTER TABLE "public"."documento_actividad" ADD PRIMARY KEY ("id_documento_actividad");

-- ----------------------------
-- Primary Key structure for table "public"."documentospublicos"
-- ----------------------------
ALTER TABLE "public"."documentospublicos" ADD PRIMARY KEY ("codpublico");

-- ----------------------------
-- Primary Key structure for table "public"."evaluacion_final"
-- ----------------------------
ALTER TABLE "public"."evaluacion_final" ADD PRIMARY KEY ("codevaluacion_final");

-- ----------------------------
-- Primary Key structure for table "public"."evaluacion_final_criterio"
-- ----------------------------
ALTER TABLE "public"."evaluacion_final_criterio" ADD PRIMARY KEY ("evaluacion_final_id", "criterio_id_criterio");

-- ----------------------------
-- Primary Key structure for table "public"."avance_semanal"
-- ----------------------------
ALTER TABLE "public"."avance_semanal" ADD PRIMARY KEY ("codavance_semanal");

-- ----------------------------
-- Primary Key structure for table "public"."foro"
-- ----------------------------
ALTER TABLE "public"."foro" ADD PRIMARY KEY ("codforo");

-- ----------------------------
-- Primary Key structure for table "public"."ge_documento"
-- ----------------------------
ALTER TABLE "public"."ge_documento" ADD PRIMARY KEY ("id_respuesta");

-- ----------------------------
-- Primary Key structure for table "public"."gestion"
-- ----------------------------
ALTER TABLE "public"."gestion" ADD PRIMARY KEY ("id_gestion");

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
ALTER TABLE "public"."hito_pagable" ADD PRIMARY KEY ("codhito_pagable");

-- ----------------------------
-- Primary Key structure for table "public"."pago_consultor"
-- ----------------------------
ALTER TABLE "public"."pago_consultor" ADD PRIMARY KEY ("codpago_consultor", "consultor_idconsultor", "consultor_usuario_idusuario");

-- ----------------------------
-- Primary Key structure for table "public"."plan_pago"
-- ----------------------------
ALTER TABLE "public"."plan_pago" ADD PRIMARY KEY ("codplan_pago");

-- ----------------------------
-- Primary Key structure for table "public"."plandepagos"
-- ----------------------------
ALTER TABLE "public"."plandepagos" ADD PRIMARY KEY ("codplandepagos", "propuestapago_grupo_empresa_codgrupo_empresa", "propuestapago_grupo_empresa_usuario_idusuario", "propuestapago_codpropuestapago");

-- ----------------------------
-- Primary Key structure for table "public"."propuestapago"
-- ----------------------------
ALTER TABLE "public"."propuestapago" ADD PRIMARY KEY ("codpropuestapago", "grupo_empresa_usuario_idusuario", "grupo_empresa_codgrupo_empresa");

-- ----------------------------
-- Primary Key structure for table "public"."proyecto"
-- ----------------------------
ALTER TABLE "public"."proyecto" ADD PRIMARY KEY ("codproyecto");

-- ----------------------------
-- Primary Key structure for table "public"."proyecto_documento"
-- ----------------------------
ALTER TABLE "public"."proyecto_documento" ADD PRIMARY KEY ("id_proyecto_documento");

-- ----------------------------
-- Primary Key structure for table "public"."registros"
-- ----------------------------
ALTER TABLE "public"."registros" ADD PRIMARY KEY ("codhito", "codentregable");

-- ----------------------------
-- Primary Key structure for table "public"."respuesta"
-- ----------------------------
ALTER TABLE "public"."respuesta" ADD PRIMARY KEY ("id_respuesta", "actividad_cod_actividad");

-- ----------------------------
-- Primary Key structure for table "public"."rol"
-- ----------------------------
ALTER TABLE "public"."rol" ADD PRIMARY KEY ("codrol");

-- ----------------------------
-- Primary Key structure for table "public"."semestre"
-- ----------------------------
ALTER TABLE "public"."semestre" ADD PRIMARY KEY ("id_semestre");

-- ----------------------------
-- Checks structure for table "public"."socio"
-- ----------------------------
ALTER TABLE "public"."socio" ADD CHECK ((telefonosocio >= 4000000) AND (telefonosocio <= 79999999));

-- ----------------------------
-- Primary Key structure for table "public"."socio"
-- ----------------------------
ALTER TABLE "public"."socio" ADD PRIMARY KEY ("idsocio");

-- ----------------------------
-- Primary Key structure for table "public"."telf_ge"
-- ----------------------------
ALTER TABLE "public"."telf_ge" ADD PRIMARY KEY ("idtelf_ge", "grupo_empresa_codgrupo_empresa", "grupo_empresa_usuario_idusuario");

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
-- Foreign Key structure for table "public"."actividad"
-- ----------------------------
ALTER TABLE "public"."actividad" ADD FOREIGN KEY ("consultor_proyecto_grupo_empresa_codconsultor_proyecto_grupo_em") REFERENCES "public"."consultor_proyecto_grupo_empresa" ("codconsultor_proyecto_grupo_empresa") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."calendario"
-- ----------------------------
ALTER TABLE "public"."calendario" ADD FOREIGN KEY ("codconsultor_proyecto_grupo_empresa") REFERENCES "public"."consultor_proyecto_grupo_empresa" ("codconsultor_proyecto_grupo_empresa") ON DELETE NO ACTION ON UPDATE NO ACTION;

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
ALTER TABLE "public"."consultor_proyecto_grupo_empresa" ADD FOREIGN KEY ("consultor_idconsultor") REFERENCES "public"."consultor" ("idconsultor") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."consultor_proyecto_grupo_empresa" ADD FOREIGN KEY ("proyecto_codproyecto") REFERENCES "public"."proyecto" ("codproyecto") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."documento_actividad"
-- ----------------------------
ALTER TABLE "public"."documento_actividad" ADD FOREIGN KEY ("actividad_cod_actividad") REFERENCES "public"."actividad" ("cod_actividad") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."evaluacion_final"
-- ----------------------------
ALTER TABLE "public"."evaluacion_final" ADD FOREIGN KEY ("codconsultor_proyecto_grupo_empresa") REFERENCES "public"."consultor_proyecto_grupo_empresa" ("codconsultor_proyecto_grupo_empresa") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."evaluacion_final_criterio"
-- ----------------------------
ALTER TABLE "public"."evaluacion_final_criterio" ADD FOREIGN KEY ("criterio_id_criterio") REFERENCES "public"."criterio" ("id_criterio") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."evaluacion_final_criterio" ADD FOREIGN KEY ("evaluacion_final_id") REFERENCES "public"."evaluacion_final" ("codevaluacion_final") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."gestion"
-- ----------------------------
ALTER TABLE "public"."gestion" ADD FOREIGN KEY ("semestre_id_semestre") REFERENCES "public"."semestre" ("id_semestre") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."grupo_empresa"
-- ----------------------------
ALTER TABLE "public"."grupo_empresa" ADD FOREIGN KEY ("usuario_idusuario") REFERENCES "public"."usuario" ("idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."hito_pagable"
-- ----------------------------
ALTER TABLE "public"."hito_pagable" ADD FOREIGN KEY ("plan_pago_codplan_pago") REFERENCES "public"."plan_pago" ("codplan_pago") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."pago_consultor"
-- ----------------------------
ALTER TABLE "public"."pago_consultor" ADD FOREIGN KEY ("hito_pagable_codhito_pagable") REFERENCES "public"."hito_pagable" ("codhito_pagable") ON DELETE NO ACTION ON UPDATE NO ACTION;
ALTER TABLE "public"."pago_consultor" ADD FOREIGN KEY ("consultor_idconsultor", "consultor_usuario_idusuario") REFERENCES "public"."consultor" ("idconsultor", "usuario_idusuario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."plan_pago"
-- ----------------------------
ALTER TABLE "public"."plan_pago" ADD FOREIGN KEY ("calendario_codcalendario") REFERENCES "public"."calendario" ("codcalendario") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."proyecto"
-- ----------------------------
ALTER TABLE "public"."proyecto" ADD FOREIGN KEY ("gestion_id_gestion") REFERENCES "public"."gestion" ("id_gestion") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."proyecto_documento"
-- ----------------------------
ALTER TABLE "public"."proyecto_documento" ADD FOREIGN KEY ("proyecto_codproyecto") REFERENCES "public"."proyecto" ("codproyecto") ON DELETE NO ACTION ON UPDATE NO ACTION;

-- ----------------------------
-- Foreign Key structure for table "public"."respuesta"
-- ----------------------------
ALTER TABLE "public"."respuesta" ADD FOREIGN KEY ("actividad_cod_actividad") REFERENCES "public"."actividad" ("cod_actividad") ON DELETE NO ACTION ON UPDATE NO ACTION;

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
