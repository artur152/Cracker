-- Database generated with pgModeler (PostgreSQL Database Modeler).
-- pgModeler  version: 0.8.2-beta
-- PostgreSQL version: 9.5
-- Project Site: pgmodeler.com.br
-- Model Author: ---


-- Database creation must be done outside an multicommand file.
-- These commands were put in this file only for convenience.
-- -- object: portal | type: DATABASE --
-- -- DROP DATABASE IF EXISTS portal;
-- CREATE DATABASE portal
-- ;
-- -- ddl-end --
-- 

-- object: public.categoies | type: TABLE --
-- DROP TABLE IF EXISTS public.categoies CASCADE;
CREATE TABLE public.categoies(
	id int8 NOT NULL DEFAULT nextval('id_categories'),
	title varchar(255) NOT NULL,
	alias varchar(191) NOT NULL,
	seo_title varchar(191),
	seo_description varchar(255),
	seo_keywords varchar(255),
	CONSTRAINT categoies_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.categoies OWNER TO postgres;
-- ddl-end --

-- object: public.characteristics | type: TABLE --
-- DROP TABLE IF EXISTS public.characteristics CASCADE;
CREATE TABLE public.characteristics(
	id int8 NOT NULL DEFAULT nextval('id_characteristics'),
	name varchar(255) NOT NULL,
	id_characteristic_groups int8,
	CONSTRAINT characteristics_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.characteristics OWNER TO postgres;
-- ddl-end --

-- object: public.characteristic_values | type: TABLE --
-- DROP TABLE IF EXISTS public.characteristic_values CASCADE;
CREATE TABLE public.characteristic_values(
	id int8 NOT NULL DEFAULT nextval('id_characteristic_values'),
	value varchar(255) NOT NULL,
	id_characteristics int8,
	CONSTRAINT characteristic_values_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.characteristic_values OWNER TO postgres;
-- ddl-end --

-- object: characteristics_fk | type: CONSTRAINT --
-- ALTER TABLE public.characteristic_values DROP CONSTRAINT IF EXISTS characteristics_fk CASCADE;
ALTER TABLE public.characteristic_values ADD CONSTRAINT characteristics_fk FOREIGN KEY (id_characteristics)
REFERENCES public.characteristics (id) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: public.products | type: TABLE --
-- DROP TABLE IF EXISTS public.products CASCADE;
CREATE TABLE public.products(
	id bigserial NOT NULL,
	title varchar(255) NOT NULL,
	alias varchar(191) NOT NULL,
	seo_title varchar(191),
	seo_description varchar(255),
	seo_keywords varchar(255),
	id_categoies int8,
	id_user_accounts int8,
	CONSTRAINT products_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.products OWNER TO postgres;
-- ddl-end --

-- object: public.characteristic_groups | type: TABLE --
-- DROP TABLE IF EXISTS public.characteristic_groups CASCADE;
CREATE TABLE public.characteristic_groups(
	id int8 NOT NULL DEFAULT nextval('id_characteristic_groups'),
	name varchar(255) NOT NULL,
	CONSTRAINT characteristic_groups_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.characteristic_groups OWNER TO postgres;
-- ddl-end --

-- object: characteristic_groups_fk | type: CONSTRAINT --
-- ALTER TABLE public.characteristics DROP CONSTRAINT IF EXISTS characteristic_groups_fk CASCADE;
ALTER TABLE public.characteristics ADD CONSTRAINT characteristic_groups_fk FOREIGN KEY (id_characteristic_groups)
REFERENCES public.characteristic_groups (id) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: public.id_products | type: SEQUENCE --
-- ALTER TABLE public.products DROP SEQUENCE IF EXISTS public.id_products CASCADE;
CREATE SEQUENCE public.id_products
	INCREMENT BY 1
	MINVALUE 0
	MAXVALUE 2147483647
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY public.products.id;

ALTER TABLE public.products ALTER COLUMN id
      SET DEFAULT nextval('public.id_products'::regclass);
-- ddl-end --
ALTER SEQUENCE public.id_products OWNER TO postgres;
-- ddl-end --

-- object: public.id_categories | type: SEQUENCE --
-- ALTER TABLE public.categoies DROP SEQUENCE IF EXISTS public.id_categories CASCADE;
CREATE SEQUENCE public.id_categories
	INCREMENT BY 1
	MINVALUE 0
	MAXVALUE 2147483647
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY public.categoies.id;

ALTER TABLE public.categoies ALTER COLUMN id
      SET DEFAULT nextval('public.id_categories'::regclass);
-- ddl-end --
ALTER SEQUENCE public.id_categories OWNER TO postgres;
-- ddl-end --

-- object: public.id_characteristics | type: SEQUENCE --
-- ALTER TABLE public.characteristics DROP SEQUENCE IF EXISTS public.id_characteristics CASCADE;
CREATE SEQUENCE public.id_characteristics
	INCREMENT BY 1
	MINVALUE 0
	MAXVALUE 2147483647
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY public.characteristics.id;

ALTER TABLE public.characteristics ALTER COLUMN id
      SET DEFAULT nextval('public.id_characteristics'::regclass);
-- ddl-end --
ALTER SEQUENCE public.id_characteristics OWNER TO postgres;
-- ddl-end --

-- object: public.id_characteristic_values | type: SEQUENCE --
-- ALTER TABLE public.characteristic_values DROP SEQUENCE IF EXISTS public.id_characteristic_values CASCADE;
CREATE SEQUENCE public.id_characteristic_values
	INCREMENT BY 1
	MINVALUE 0
	MAXVALUE 2147483647
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY public.characteristic_values.id;

ALTER TABLE public.characteristic_values ALTER COLUMN id
      SET DEFAULT nextval('public.id_characteristic_values'::regclass);
-- ddl-end --
ALTER SEQUENCE public.id_characteristic_values OWNER TO postgres;
-- ddl-end --

-- object: public.id_characteristic_groups | type: SEQUENCE --
-- ALTER TABLE public.characteristic_groups DROP SEQUENCE IF EXISTS public.id_characteristic_groups CASCADE;
CREATE SEQUENCE public.id_characteristic_groups
	INCREMENT BY 1
	MINVALUE 0
	MAXVALUE 2147483647
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY public.characteristic_groups.id;

ALTER TABLE public.characteristic_groups ALTER COLUMN id
      SET DEFAULT nextval('public.id_characteristic_groups'::regclass);
-- ddl-end --
ALTER SEQUENCE public.id_characteristic_groups OWNER TO postgres;
-- ddl-end --

-- object: public.many_products_has_many_characteristic_values | type: TABLE --
-- DROP TABLE IF EXISTS public.many_products_has_many_characteristic_values CASCADE;
CREATE TABLE public.many_products_has_many_characteristic_values(
	id_products bigint,
	id_characteristic_values int8,
	CONSTRAINT many_products_has_many_characteristic_values_pk PRIMARY KEY (id_products,id_characteristic_values)

);
-- ddl-end --

-- object: products_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_products_has_many_characteristic_values DROP CONSTRAINT IF EXISTS products_fk CASCADE;
ALTER TABLE public.many_products_has_many_characteristic_values ADD CONSTRAINT products_fk FOREIGN KEY (id_products)
REFERENCES public.products (id) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;
-- ddl-end --

-- object: characteristic_values_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_products_has_many_characteristic_values DROP CONSTRAINT IF EXISTS characteristic_values_fk CASCADE;
ALTER TABLE public.many_products_has_many_characteristic_values ADD CONSTRAINT characteristic_values_fk FOREIGN KEY (id_characteristic_values)
REFERENCES public.characteristic_values (id) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;
-- ddl-end --

-- object: categoies_fk | type: CONSTRAINT --
-- ALTER TABLE public.products DROP CONSTRAINT IF EXISTS categoies_fk CASCADE;
ALTER TABLE public.products ADD CONSTRAINT categoies_fk FOREIGN KEY (id_categoies)
REFERENCES public.categoies (id) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: categoies_alias | type: INDEX --
-- DROP INDEX IF EXISTS public.categoies_alias CASCADE;
CREATE UNIQUE INDEX categoies_alias ON public.categoies
	USING btree
	(
	  alias
	);
-- ddl-end --

-- object: products_alias | type: INDEX --
-- DROP INDEX IF EXISTS public.products_alias CASCADE;
CREATE UNIQUE INDEX products_alias ON public.products
	USING btree
	(
	  alias
	);
-- ddl-end --

-- object: public.properties | type: TABLE --
-- DROP TABLE IF EXISTS public.properties CASCADE;
CREATE TABLE public.properties(
	id int8 NOT NULL DEFAULT nextval('id_properties'),
	name varchar(255) NOT NULL,
	CONSTRAINT properties_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.properties OWNER TO postgres;
-- ddl-end --

-- object: public.propertie_values | type: TABLE --
-- DROP TABLE IF EXISTS public.propertie_values CASCADE;
CREATE TABLE public.propertie_values(
	id int8 NOT NULL DEFAULT nextval('id_propertie_values'),
	value varchar(255) NOT NULL,
	id_properties int8,
	CONSTRAINT propertie_values_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.propertie_values OWNER TO postgres;
-- ddl-end --

-- object: public.id_propertie_values | type: SEQUENCE --
-- ALTER TABLE public.propertie_values DROP SEQUENCE IF EXISTS public.id_propertie_values CASCADE;
CREATE SEQUENCE public.id_propertie_values
	INCREMENT BY 1
	MINVALUE 0
	MAXVALUE 2147483647
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY public.propertie_values.id;

ALTER TABLE public.propertie_values ALTER COLUMN id
      SET DEFAULT nextval('public.id_propertie_values'::regclass);
-- ddl-end --
ALTER SEQUENCE public.id_propertie_values OWNER TO postgres;
-- ddl-end --

-- object: public.id_properties | type: SEQUENCE --
-- ALTER TABLE public.properties DROP SEQUENCE IF EXISTS public.id_properties CASCADE;
CREATE SEQUENCE public.id_properties
	INCREMENT BY 1
	MINVALUE 0
	MAXVALUE 2147483647
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY public.properties.id;

ALTER TABLE public.properties ALTER COLUMN id
      SET DEFAULT nextval('public.id_properties'::regclass);
-- ddl-end --
ALTER SEQUENCE public.id_properties OWNER TO postgres;
-- ddl-end --

-- object: public.many_products_has_many_propertie_values | type: TABLE --
-- DROP TABLE IF EXISTS public.many_products_has_many_propertie_values CASCADE;
CREATE TABLE public.many_products_has_many_propertie_values(
	id_products bigint,
	id_propertie_values int8,
	CONSTRAINT many_products_has_many_propertie_values_pk PRIMARY KEY (id_products,id_propertie_values)

);
-- ddl-end --

-- object: products_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_products_has_many_propertie_values DROP CONSTRAINT IF EXISTS products_fk CASCADE;
ALTER TABLE public.many_products_has_many_propertie_values ADD CONSTRAINT products_fk FOREIGN KEY (id_products)
REFERENCES public.products (id) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;
-- ddl-end --

-- object: propertie_values_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_products_has_many_propertie_values DROP CONSTRAINT IF EXISTS propertie_values_fk CASCADE;
ALTER TABLE public.many_products_has_many_propertie_values ADD CONSTRAINT propertie_values_fk FOREIGN KEY (id_propertie_values)
REFERENCES public.propertie_values (id) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;
-- ddl-end --

-- object: properties_fk | type: CONSTRAINT --
-- ALTER TABLE public.propertie_values DROP CONSTRAINT IF EXISTS properties_fk CASCADE;
ALTER TABLE public.propertie_values ADD CONSTRAINT properties_fk FOREIGN KEY (id_properties)
REFERENCES public.properties (id) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: public.users | type: TABLE --
-- DROP TABLE IF EXISTS public.users CASCADE;
CREATE TABLE public.users(
	uuid uuid NOT NULL DEFAULT gen_random_uuid(),
	email varchar(191),
	CONSTRAINT users_id PRIMARY KEY (uuid)

);
-- ddl-end --
ALTER TABLE public.users OWNER TO postgres;
-- ddl-end --

-- object: public.user_accounts | type: TABLE --
-- DROP TABLE IF EXISTS public.user_accounts CASCADE;
CREATE TABLE public.user_accounts(
	id int8 NOT NULL DEFAULT nextval('id_user_accounts'),
	uuid_users uuid,
	CONSTRAINT user_accounts_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.user_accounts OWNER TO postgres;
-- ddl-end --

-- object: public.id_user_accounts | type: SEQUENCE --
-- ALTER TABLE public.user_accounts DROP SEQUENCE IF EXISTS public.id_user_accounts CASCADE;
CREATE SEQUENCE public.id_user_accounts
	INCREMENT BY 1
	MINVALUE 0
	MAXVALUE 2147483647
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY public.user_accounts.id;

ALTER TABLE public.user_accounts ALTER COLUMN id
      SET DEFAULT nextval('public.id_user_accounts'::regclass);
-- ddl-end --
ALTER SEQUENCE public.id_user_accounts OWNER TO postgres;
-- ddl-end --

-- object: users_fk | type: CONSTRAINT --
-- ALTER TABLE public.user_accounts DROP CONSTRAINT IF EXISTS users_fk CASCADE;
ALTER TABLE public.user_accounts ADD CONSTRAINT users_fk FOREIGN KEY (uuid_users)
REFERENCES public.users (uuid) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: user_accounts_fk | type: CONSTRAINT --
-- ALTER TABLE public.products DROP CONSTRAINT IF EXISTS user_accounts_fk CASCADE;
ALTER TABLE public.products ADD CONSTRAINT user_accounts_fk FOREIGN KEY (id_user_accounts)
REFERENCES public.user_accounts (id) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: public.product_images | type: TABLE --
-- DROP TABLE IF EXISTS public.product_images CASCADE;
CREATE TABLE public.product_images(
	id int8 NOT NULL DEFAULT nextval('id_product_images'),
	uri text NOT NULL,
	id_products bigint,
	CONSTRAINT product_images_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.product_images OWNER TO postgres;
-- ddl-end --

-- object: public.id_product_images | type: SEQUENCE --
-- ALTER TABLE public.product_images DROP SEQUENCE IF EXISTS public.id_product_images CASCADE;
CREATE SEQUENCE public.id_product_images
	INCREMENT BY 1
	MINVALUE 0
	MAXVALUE 2147483647
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY public.product_images.id;

ALTER TABLE public.product_images ALTER COLUMN id
      SET DEFAULT nextval('public.id_product_images'::regclass);
-- ddl-end --
ALTER SEQUENCE public.id_product_images OWNER TO postgres;
-- ddl-end --

-- object: products_fk | type: CONSTRAINT --
-- ALTER TABLE public.product_images DROP CONSTRAINT IF EXISTS products_fk CASCADE;
ALTER TABLE public.product_images ADD CONSTRAINT products_fk FOREIGN KEY (id_products)
REFERENCES public.products (id) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: public.cart | type: TABLE --
-- DROP TABLE IF EXISTS public.cart CASCADE;
CREATE TABLE public.cart(
	id int8 NOT NULL DEFAULT nextval('id_cart'),
	uuid_users uuid,
	id_products bigint,
	CONSTRAINT cart_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.cart OWNER TO postgres;
-- ddl-end --

-- object: public.id_cart | type: SEQUENCE --
-- ALTER TABLE public.cart DROP SEQUENCE IF EXISTS public.id_cart CASCADE;
CREATE SEQUENCE public.id_cart
	INCREMENT BY 1
	MINVALUE 0
	MAXVALUE 2147483647
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY public.cart.id;

ALTER TABLE public.cart ALTER COLUMN id
      SET DEFAULT nextval('public.id_cart'::regclass);
-- ddl-end --
ALTER SEQUENCE public.id_cart OWNER TO postgres;
-- ddl-end --

-- object: users_fk | type: CONSTRAINT --
-- ALTER TABLE public.cart DROP CONSTRAINT IF EXISTS users_fk CASCADE;
ALTER TABLE public.cart ADD CONSTRAINT users_fk FOREIGN KEY (uuid_users)
REFERENCES public.users (uuid) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: products_fk | type: CONSTRAINT --
-- ALTER TABLE public.cart DROP CONSTRAINT IF EXISTS products_fk CASCADE;
ALTER TABLE public.cart ADD CONSTRAINT products_fk FOREIGN KEY (id_products)
REFERENCES public.products (id) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: public.orders | type: TABLE --
-- DROP TABLE IF EXISTS public.orders CASCADE;
CREATE TABLE public.orders(
	id int8 NOT NULL DEFAULT nextval('id_orders'),
	uuid_users uuid,
	CONSTRAINT orders_id PRIMARY KEY (id)

);
-- ddl-end --
ALTER TABLE public.orders OWNER TO postgres;
-- ddl-end --

-- object: public.id_orders | type: SEQUENCE --
-- ALTER TABLE public.orders DROP SEQUENCE IF EXISTS public.id_orders CASCADE;
CREATE SEQUENCE public.id_orders
	INCREMENT BY 1
	MINVALUE 0
	MAXVALUE 2147483647
	START WITH 1
	CACHE 1
	NO CYCLE
	OWNED BY public.orders.id;

ALTER TABLE public.orders ALTER COLUMN id
      SET DEFAULT nextval('public.id_orders'::regclass);
-- ddl-end --
ALTER SEQUENCE public.id_orders OWNER TO postgres;
-- ddl-end --

-- object: users_fk | type: CONSTRAINT --
-- ALTER TABLE public.orders DROP CONSTRAINT IF EXISTS users_fk CASCADE;
ALTER TABLE public.orders ADD CONSTRAINT users_fk FOREIGN KEY (uuid_users)
REFERENCES public.users (uuid) MATCH FULL
ON DELETE SET NULL ON UPDATE CASCADE;
-- ddl-end --

-- object: public.many_orders_has_many_products | type: TABLE --
-- DROP TABLE IF EXISTS public.many_orders_has_many_products CASCADE;
CREATE TABLE public.many_orders_has_many_products(
	id_orders int8,
	id_products bigint,
	CONSTRAINT many_orders_has_many_products_pk PRIMARY KEY (id_orders,id_products)

);
-- ddl-end --

-- object: orders_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_orders_has_many_products DROP CONSTRAINT IF EXISTS orders_fk CASCADE;
ALTER TABLE public.many_orders_has_many_products ADD CONSTRAINT orders_fk FOREIGN KEY (id_orders)
REFERENCES public.orders (id) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;
-- ddl-end --

-- object: products_fk | type: CONSTRAINT --
-- ALTER TABLE public.many_orders_has_many_products DROP CONSTRAINT IF EXISTS products_fk CASCADE;
ALTER TABLE public.many_orders_has_many_products ADD CONSTRAINT products_fk FOREIGN KEY (id_products)
REFERENCES public.products (id) MATCH FULL
ON DELETE RESTRICT ON UPDATE CASCADE;
-- ddl-end --


