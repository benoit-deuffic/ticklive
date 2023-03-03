--
-- PostgreSQL database dump
--

-- Dumped from database version 12.2 (Debian 12.2-2.pgdg100+1)
-- Dumped by pg_dump version 12.2 (Debian 12.2-2.pgdg100+1)

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: doctrine_migration_versions; Type: TABLE; Schema: public; Owner: project
--

CREATE TABLE public.doctrine_migration_versions (
    version character varying(191) NOT NULL,
    executed_at timestamp(0) without time zone DEFAULT NULL::timestamp without time zone,
    execution_time integer
);


ALTER TABLE public.doctrine_migration_versions OWNER TO project;

--
-- Name: product; Type: TABLE; Schema: public; Owner: project
--

CREATE TABLE public.product (
    id uuid NOT NULL,
    name character varying(255) NOT NULL,
    info character varying(255) NOT NULL,
    price double precision NOT NULL,
    vat_code integer NOT NULL,
    is_food json NOT NULL
);


ALTER TABLE public.product OWNER TO project;

--
-- Name: COLUMN product.id; Type: COMMENT; Schema: public; Owner: project
--

COMMENT ON COLUMN public.product.id IS '(DC2Type:uuid)';


--
-- Name: stock; Type: TABLE; Schema: public; Owner: project
--

CREATE TABLE public.stock (
    id uuid NOT NULL,
    counter integer NOT NULL
);


ALTER TABLE public.stock OWNER TO project;

--
-- Name: COLUMN stock.id; Type: COMMENT; Schema: public; Owner: project
--

COMMENT ON COLUMN public.stock.id IS '(DC2Type:uuid)';


--
-- Data for Name: doctrine_migration_versions; Type: TABLE DATA; Schema: public; Owner: project
--

COPY public.doctrine_migration_versions (version, executed_at, execution_time) FROM stdin;
DoctrineMigrations\\Version20230303075759	2023-03-03 07:58:38	13
\.


--
-- Data for Name: product; Type: TABLE DATA; Schema: public; Owner: project
--

COPY public.product (id, name, info, price, vat_code, is_food) FROM stdin;
1edb9a6d-247c-674c-84f1-3febe588b3bb	test	test3	14	1	"{\\"food\\\\:false,\\"to-take\\":false}"
1edb9c11-18e3-602a-b8f5-cd22a6da2240	test	test3	14	1	"{\\"food\\\\:false,\\"to-take\\":false}"
\.


--
-- Data for Name: stock; Type: TABLE DATA; Schema: public; Owner: project
--

COPY public.stock (id, counter) FROM stdin;
\.


--
-- Name: doctrine_migration_versions doctrine_migration_versions_pkey; Type: CONSTRAINT; Schema: public; Owner: project
--

ALTER TABLE ONLY public.doctrine_migration_versions
    ADD CONSTRAINT doctrine_migration_versions_pkey PRIMARY KEY (version);


--
-- Name: product product_pkey; Type: CONSTRAINT; Schema: public; Owner: project
--

ALTER TABLE ONLY public.product
    ADD CONSTRAINT product_pkey PRIMARY KEY (id);


--
-- Name: stock stock_pkey; Type: CONSTRAINT; Schema: public; Owner: project
--

ALTER TABLE ONLY public.stock
    ADD CONSTRAINT stock_pkey PRIMARY KEY (id);


--
-- PostgreSQL database dump complete
--

