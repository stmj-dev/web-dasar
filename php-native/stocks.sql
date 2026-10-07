-- -------------------------------------------------------------
-- TablePlus 26.10.22(802)
--
-- https://tableplus.com/
--
-- Database: RPL
-- Generation Time: 2026-10-07 07:08:53.3520
-- -------------------------------------------------------------


-- Sequence and defined type
CREATE SEQUENCE IF NOT EXISTS native_stocks_id_seq;

-- Table Definition
CREATE TABLE "public"."native_stocks" (
    "id" int8 NOT NULL DEFAULT nextval('native_stocks_id_seq'::regclass),
    "name" varchar(255) NOT NULL,
    "count" int4 NOT NULL,
    "price" numeric(15,2) NOT NULL,
    "created_at" timestamp(0),
    "updated_at" timestamp(0),
    PRIMARY KEY ("id")
);

