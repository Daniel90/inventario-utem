--
-- PostgreSQL database dump
--

-- Dumped from database version 9.2.4
-- Dumped by pg_dump version 9.2.4
-- Started on 2013-08-04 11:50:41

SET statement_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 177 (class 3079 OID 11727)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 1974 (class 0 OID 0)
-- Dependencies: 177
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 170 (class 1259 OID 16630)
-- Name: administrador; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE administrador (
    id integer NOT NULL,
    usuario character varying(50) NOT NULL,
    password character varying(200) NOT NULL,
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE public.administrador OWNER TO postgres;

--
-- TOC entry 169 (class 1259 OID 16628)
-- Name: administrador_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE administrador_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.administrador_id_seq OWNER TO postgres;

--
-- TOC entry 1975 (class 0 OID 0)
-- Dependencies: 169
-- Name: administrador_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE administrador_id_seq OWNED BY administrador.id;


--
-- TOC entry 174 (class 1259 OID 16772)
-- Name: bajabienes; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE bajabienes (
    id integer NOT NULL,
    centrocostos_id bigint NOT NULL,
    bienes_id bigint NOT NULL,
    "idGrupo" character varying(5),
    "idSubGrupo" character varying(5),
    "idTipo" character varying(5),
    "Tipo" character varying(2) NOT NULL,
    "Nombre" character varying(100),
    "Modelo" character varying(100),
    "Marca" character varying(50),
    "NumeroSerie" character varying(50) NOT NULL,
    "NumeroDocumento" character varying(50),
    "FechaDocumento" timestamp(0) without time zone,
    "DecretoBaja" character varying(50) NOT NULL,
    "FechaDecreto" timestamp(0) without time zone,
    "TipoDocumento" character varying(10) NOT NULL,
    "MotivoBaja" character varying(100) NOT NULL,
    "ValorActualBien" character varying(8),
    "CuentaDeMayor" character varying(50),
    "Depreciacion" character varying(8),
    "ValordeBaja" character varying(8),
    "Observaciones" character varying(300),
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE public.bajabienes OWNER TO postgres;

--
-- TOC entry 173 (class 1259 OID 16770)
-- Name: bajabienes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE bajabienes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.bajabienes_id_seq OWNER TO postgres;

--
-- TOC entry 1976 (class 0 OID 0)
-- Dependencies: 173
-- Name: bajabienes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE bajabienes_id_seq OWNED BY bajabienes.id;


--
-- TOC entry 172 (class 1259 OID 16764)
-- Name: bienes; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE bienes (
    "idGrupo" character varying(5),
    "idSubGrupo" character varying(5),
    "idTipo" character varying(5),
    "NumeroDeFactura" character varying(10) NOT NULL,
    "Nombre" character varying(100),
    "Tipo" character varying(2) NOT NULL,
    id integer NOT NULL,
    centrocostos_id bigint NOT NULL,
    "Largo" character varying(5),
    "Ancho" character varying(5),
    "Alto" character varying(5),
    "UdeMedidas" character varying(5),
    "Modelo" character varying(100),
    "NumeroSerie" character varying(50) NOT NULL,
    "AñoModelo" character varying(5),
    "Marca" character varying(50),
    "Folio" character varying(20),
    "FechaComprobante" timestamp(0) without time zone,
    "FechaCompra" timestamp(0) without time zone,
    "VidaUtil" character varying(3),
    "NumeroDeUnidades" bigint,
    "ValorUnitario" character varying(10),
    "CuentaDeMayor" character varying(50),
    "ValorTotal" character varying(20),
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE public.bienes OWNER TO postgres;

--
-- TOC entry 171 (class 1259 OID 16762)
-- Name: bienes_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE bienes_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.bienes_id_seq OWNER TO postgres;

--
-- TOC entry 1977 (class 0 OID 0)
-- Dependencies: 171
-- Name: bienes_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE bienes_id_seq OWNED BY bienes.id;


--
-- TOC entry 176 (class 1259 OID 16783)
-- Name: centrocostos; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE centrocostos (
    id integer NOT NULL,
    encargado character varying(50) NOT NULL,
    departamento character varying(50) NOT NULL,
    sede character varying(50) NOT NULL,
    telefono character varying(20) NOT NULL,
    created_at timestamp(0) without time zone NOT NULL,
    updated_at timestamp(0) without time zone NOT NULL
);


ALTER TABLE public.centrocostos OWNER TO postgres;

--
-- TOC entry 175 (class 1259 OID 16781)
-- Name: centrocostos_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE centrocostos_id_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.centrocostos_id_seq OWNER TO postgres;

--
-- TOC entry 1978 (class 0 OID 0)
-- Dependencies: 175
-- Name: centrocostos_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE centrocostos_id_seq OWNED BY centrocostos.id;


--
-- TOC entry 168 (class 1259 OID 16607)
-- Name: laravel_migrations; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE laravel_migrations (
    bundle character varying(50) NOT NULL,
    name character varying(200) NOT NULL,
    batch bigint NOT NULL
);


ALTER TABLE public.laravel_migrations OWNER TO postgres;

--
-- TOC entry 1939 (class 2604 OID 16633)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY administrador ALTER COLUMN id SET DEFAULT nextval('administrador_id_seq'::regclass);


--
-- TOC entry 1941 (class 2604 OID 16775)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bajabienes ALTER COLUMN id SET DEFAULT nextval('bajabienes_id_seq'::regclass);


--
-- TOC entry 1940 (class 2604 OID 16767)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bienes ALTER COLUMN id SET DEFAULT nextval('bienes_id_seq'::regclass);


--
-- TOC entry 1942 (class 2604 OID 16786)
-- Name: id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY centrocostos ALTER COLUMN id SET DEFAULT nextval('centrocostos_id_seq'::regclass);


--
-- TOC entry 1960 (class 0 OID 16630)
-- Dependencies: 170
-- Data for Name: administrador; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY administrador (id, usuario, password, created_at, updated_at) FROM stdin;
5	12345	$2a$08$ySi36ZbSSB3Qa4.yae2KOeCQ144LbJuo/axOJyOo.7X3ju8kTeNd6	2013-07-04 01:23:18	2013-07-04 01:23:18
\.


--
-- TOC entry 1979 (class 0 OID 0)
-- Dependencies: 169
-- Name: administrador_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('administrador_id_seq', 6, true);


--
-- TOC entry 1964 (class 0 OID 16772)
-- Dependencies: 174
-- Data for Name: bajabienes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY bajabienes (id, centrocostos_id, bienes_id, "idGrupo", "idSubGrupo", "idTipo", "Tipo", "Nombre", "Modelo", "Marca", "NumeroSerie", "NumeroDocumento", "FechaDocumento", "DecretoBaja", "FechaDecreto", "TipoDocumento", "MotivoBaja", "ValorActualBien", "CuentaDeMayor", "Depreciacion", "ValordeBaja", "Observaciones", created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 1980 (class 0 OID 0)
-- Dependencies: 173
-- Name: bajabienes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('bajabienes_id_seq', 3, true);


--
-- TOC entry 1962 (class 0 OID 16764)
-- Dependencies: 172
-- Data for Name: bienes; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY bienes ("idGrupo", "idSubGrupo", "idTipo", "NumeroDeFactura", "Nombre", "Tipo", id, centrocostos_id, "Largo", "Ancho", "Alto", "UdeMedidas", "Modelo", "NumeroSerie", "AñoModelo", "Marca", "Folio", "FechaComprobante", "FechaCompra", "VidaUtil", "NumeroDeUnidades", "ValorUnitario", "CuentaDeMayor", "ValorTotal", created_at, updated_at) FROM stdin;
\.


--
-- TOC entry 1981 (class 0 OID 0)
-- Dependencies: 171
-- Name: bienes_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('bienes_id_seq', 1, false);


--
-- TOC entry 1966 (class 0 OID 16783)
-- Dependencies: 176
-- Data for Name: centrocostos; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY centrocostos (id, encargado, departamento, sede, telefono, created_at, updated_at) FROM stdin;
100001	Mario Cataldo Navea	INDUSTRIA	MACUL	(56-2) 2787 7108	2013-08-01 00:00:00	2013-08-01 00:00:00
100002	Mauro Castillo Valdés	INFORMATICA Y COMPUTACIÓN	MACUL	(56-2) 2787 7211	2013-08-01 00:00:00	2013-08-01 00:00:00
100003	Zenobio Saldivia Maldonado	HUMANIDADES	ALONSO OVALLE	(56-2) 699 4131	2013-08-01 00:00:00	2013-08-01 00:00:00
100004	Rafael Pizarro Alvarado	TRABAJO SOCIAL	VIDAURRE	(56-2) 2698 2297	2013-08-01 00:00:00	2013-08-01 00:00:00
\.


--
-- TOC entry 1982 (class 0 OID 0)
-- Dependencies: 175
-- Name: centrocostos_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('centrocostos_id_seq', 1, false);


--
-- TOC entry 1958 (class 0 OID 16607)
-- Dependencies: 168
-- Data for Name: laravel_migrations; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY laravel_migrations (bundle, name, batch) FROM stdin;
application	2013_06_22_034422_admin	1
application	2013_06_22_035434_admin	2
application	2013_06_23_225033_bienes	2
application	2013_06_24_203632_migraalta	3
application	2013_06_28_012854_bienes	4
application	2013_07_31_173941_bajabien	4
application	2013_08_01_165550_centrocosto	4
\.


--
-- TOC entry 1946 (class 2606 OID 16635)
-- Name: administrador_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY administrador
    ADD CONSTRAINT administrador_pkey PRIMARY KEY (id);


--
-- TOC entry 1953 (class 2606 OID 16780)
-- Name: bajabienes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY bajabienes
    ADD CONSTRAINT bajabienes_pkey PRIMARY KEY (id);


--
-- TOC entry 1949 (class 2606 OID 16769)
-- Name: bienes_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY bienes
    ADD CONSTRAINT bienes_pkey PRIMARY KEY (id);


--
-- TOC entry 1955 (class 2606 OID 16788)
-- Name: centrocostos_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY centrocostos
    ADD CONSTRAINT centrocostos_pkey PRIMARY KEY (id);


--
-- TOC entry 1944 (class 2606 OID 16611)
-- Name: laravel_migrations_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY laravel_migrations
    ADD CONSTRAINT laravel_migrations_pkey PRIMARY KEY (bundle, name);


--
-- TOC entry 1950 (class 1259 OID 16806)
-- Name: FKI_bien; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX "FKI_bien" ON bajabienes USING btree (bienes_id);


--
-- TOC entry 1947 (class 1259 OID 16794)
-- Name: FKI_centro; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX "FKI_centro" ON bienes USING btree (centrocostos_id);


--
-- TOC entry 1951 (class 1259 OID 16800)
-- Name: FKI_centro_baja; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX "FKI_centro_baja" ON bajabienes USING btree (centrocostos_id);


--
-- TOC entry 1956 (class 2606 OID 16789)
-- Name: FK_centro; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bienes
    ADD CONSTRAINT "FK_centro" FOREIGN KEY (centrocostos_id) REFERENCES centrocostos(id);


--
-- TOC entry 1957 (class 2606 OID 16807)
-- Name: fk_centro; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY bajabienes
    ADD CONSTRAINT fk_centro FOREIGN KEY (centrocostos_id) REFERENCES centrocostos(id);


--
-- TOC entry 1973 (class 0 OID 0)
-- Dependencies: 5
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2013-08-04 11:50:42

--
-- PostgreSQL database dump complete
--

