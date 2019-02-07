PGDMP     $    '    	            w            reservalumen    11.1    11.1 2    9           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                       false            :           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                       false            ;           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                       false            <           1262    17219    reservalumen    DATABASE     �   CREATE DATABASE reservalumen WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'Spanish_Ecuador.1252' LC_CTYPE = 'Spanish_Ecuador.1252';
    DROP DATABASE reservalumen;
             postgres    false            �            1259    33978    detalle_reserva    TABLE     �   CREATE TABLE public.detalle_reserva (
    detalle_id integer NOT NULL,
    mesa_id integer NOT NULL,
    reserva_id integer NOT NULL,
    numerousuarios integer NOT NULL
);
 #   DROP TABLE public.detalle_reserva;
       public         postgres    false            �            1259    33976    detalle_reserva_detalle_id_seq    SEQUENCE     �   CREATE SEQUENCE public.detalle_reserva_detalle_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 5   DROP SEQUENCE public.detalle_reserva_detalle_id_seq;
       public       postgres    false    207            =           0    0    detalle_reserva_detalle_id_seq    SEQUENCE OWNED BY     a   ALTER SEQUENCE public.detalle_reserva_detalle_id_seq OWNED BY public.detalle_reserva.detalle_id;
            public       postgres    false    206            �            1259    33944    horario    TABLE     k   CREATE TABLE public.horario (
    horario_id integer NOT NULL,
    hora character varying(255) NOT NULL
);
    DROP TABLE public.horario;
       public         postgres    false            �            1259    33942    horario_horario_id_seq    SEQUENCE     �   CREATE SEQUENCE public.horario_horario_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.horario_horario_id_seq;
       public       postgres    false    201            >           0    0    horario_horario_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.horario_horario_id_seq OWNED BY public.horario.horario_id;
            public       postgres    false    200            �            1259    33970    mesa    TABLE     �   CREATE TABLE public.mesa (
    mesa_id integer NOT NULL,
    numeromesas character varying(255) NOT NULL,
    estado boolean NOT NULL
);
    DROP TABLE public.mesa;
       public         postgres    false            �            1259    33968    mesa_mesa_id_seq    SEQUENCE     �   CREATE SEQUENCE public.mesa_mesa_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 '   DROP SEQUENCE public.mesa_mesa_id_seq;
       public       postgres    false    205            ?           0    0    mesa_mesa_id_seq    SEQUENCE OWNED BY     E   ALTER SEQUENCE public.mesa_mesa_id_seq OWNED BY public.mesa.mesa_id;
            public       postgres    false    204            �            1259    33925 
   migrations    TABLE     �   CREATE TABLE public.migrations (
    id integer NOT NULL,
    migration character varying(255) NOT NULL,
    batch integer NOT NULL
);
    DROP TABLE public.migrations;
       public         postgres    false            �            1259    33923    migrations_id_seq    SEQUENCE     �   CREATE SEQUENCE public.migrations_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.migrations_id_seq;
       public       postgres    false    197            @           0    0    migrations_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.migrations_id_seq OWNED BY public.migrations.id;
            public       postgres    false    196            �            1259    33933    person    TABLE       CREATE TABLE public.person (
    id integer NOT NULL,
    pers_ci character varying(255) NOT NULL,
    nombre character varying(255) NOT NULL,
    telefono character varying(255) NOT NULL,
    correo character varying(255) NOT NULL,
    clave character varying(255) NOT NULL
);
    DROP TABLE public.person;
       public         postgres    false            �            1259    33931    person_id_seq    SEQUENCE     �   CREATE SEQUENCE public.person_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.person_id_seq;
       public       postgres    false    199            A           0    0    person_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.person_id_seq OWNED BY public.person.id;
            public       postgres    false    198            �            1259    33952    reserva    TABLE     �   CREATE TABLE public.reserva (
    reserva_id integer NOT NULL,
    id integer NOT NULL,
    horario_id integer NOT NULL,
    fecha date NOT NULL
);
    DROP TABLE public.reserva;
       public         postgres    false            �            1259    33950    reserva_reserva_id_seq    SEQUENCE     �   CREATE SEQUENCE public.reserva_reserva_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.reserva_reserva_id_seq;
       public       postgres    false    203            B           0    0    reserva_reserva_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.reserva_reserva_id_seq OWNED BY public.reserva.reserva_id;
            public       postgres    false    202            �
           2604    33981    detalle_reserva detalle_id    DEFAULT     �   ALTER TABLE ONLY public.detalle_reserva ALTER COLUMN detalle_id SET DEFAULT nextval('public.detalle_reserva_detalle_id_seq'::regclass);
 I   ALTER TABLE public.detalle_reserva ALTER COLUMN detalle_id DROP DEFAULT;
       public       postgres    false    206    207    207            �
           2604    33947    horario horario_id    DEFAULT     x   ALTER TABLE ONLY public.horario ALTER COLUMN horario_id SET DEFAULT nextval('public.horario_horario_id_seq'::regclass);
 A   ALTER TABLE public.horario ALTER COLUMN horario_id DROP DEFAULT;
       public       postgres    false    200    201    201            �
           2604    33973    mesa mesa_id    DEFAULT     l   ALTER TABLE ONLY public.mesa ALTER COLUMN mesa_id SET DEFAULT nextval('public.mesa_mesa_id_seq'::regclass);
 ;   ALTER TABLE public.mesa ALTER COLUMN mesa_id DROP DEFAULT;
       public       postgres    false    205    204    205            �
           2604    33928    migrations id    DEFAULT     n   ALTER TABLE ONLY public.migrations ALTER COLUMN id SET DEFAULT nextval('public.migrations_id_seq'::regclass);
 <   ALTER TABLE public.migrations ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    196    197    197            �
           2604    33936 	   person id    DEFAULT     f   ALTER TABLE ONLY public.person ALTER COLUMN id SET DEFAULT nextval('public.person_id_seq'::regclass);
 8   ALTER TABLE public.person ALTER COLUMN id DROP DEFAULT;
       public       postgres    false    198    199    199            �
           2604    33955    reserva reserva_id    DEFAULT     x   ALTER TABLE ONLY public.reserva ALTER COLUMN reserva_id SET DEFAULT nextval('public.reserva_reserva_id_seq'::regclass);
 A   ALTER TABLE public.reserva ALTER COLUMN reserva_id DROP DEFAULT;
       public       postgres    false    203    202    203            6          0    33978    detalle_reserva 
   TABLE DATA               Z   COPY public.detalle_reserva (detalle_id, mesa_id, reserva_id, numerousuarios) FROM stdin;
    public       postgres    false    207   7       0          0    33944    horario 
   TABLE DATA               3   COPY public.horario (horario_id, hora) FROM stdin;
    public       postgres    false    201   7       4          0    33970    mesa 
   TABLE DATA               <   COPY public.mesa (mesa_id, numeromesas, estado) FROM stdin;
    public       postgres    false    205   N7       ,          0    33925 
   migrations 
   TABLE DATA               :   COPY public.migrations (id, migration, batch) FROM stdin;
    public       postgres    false    197   �7       .          0    33933    person 
   TABLE DATA               N   COPY public.person (id, pers_ci, nombre, telefono, correo, clave) FROM stdin;
    public       postgres    false    199   8       2          0    33952    reserva 
   TABLE DATA               D   COPY public.reserva (reserva_id, id, horario_id, fecha) FROM stdin;
    public       postgres    false    203   19       C           0    0    detalle_reserva_detalle_id_seq    SEQUENCE SET     L   SELECT pg_catalog.setval('public.detalle_reserva_detalle_id_seq', 1, true);
            public       postgres    false    206            D           0    0    horario_horario_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.horario_horario_id_seq', 3, true);
            public       postgres    false    200            E           0    0    mesa_mesa_id_seq    SEQUENCE SET     >   SELECT pg_catalog.setval('public.mesa_mesa_id_seq', 5, true);
            public       postgres    false    204            F           0    0    migrations_id_seq    SEQUENCE SET     ?   SELECT pg_catalog.setval('public.migrations_id_seq', 5, true);
            public       postgres    false    196            G           0    0    person_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.person_id_seq', 21, true);
            public       postgres    false    198            H           0    0    reserva_reserva_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.reserva_reserva_id_seq', 4, true);
            public       postgres    false    202            �
           2606    33983 $   detalle_reserva detalle_reserva_pkey 
   CONSTRAINT     j   ALTER TABLE ONLY public.detalle_reserva
    ADD CONSTRAINT detalle_reserva_pkey PRIMARY KEY (detalle_id);
 N   ALTER TABLE ONLY public.detalle_reserva DROP CONSTRAINT detalle_reserva_pkey;
       public         postgres    false    207            �
           2606    33949    horario horario_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.horario
    ADD CONSTRAINT horario_pkey PRIMARY KEY (horario_id);
 >   ALTER TABLE ONLY public.horario DROP CONSTRAINT horario_pkey;
       public         postgres    false    201            �
           2606    33975    mesa mesa_pkey 
   CONSTRAINT     Q   ALTER TABLE ONLY public.mesa
    ADD CONSTRAINT mesa_pkey PRIMARY KEY (mesa_id);
 8   ALTER TABLE ONLY public.mesa DROP CONSTRAINT mesa_pkey;
       public         postgres    false    205            �
           2606    33930    migrations migrations_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.migrations
    ADD CONSTRAINT migrations_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.migrations DROP CONSTRAINT migrations_pkey;
       public         postgres    false    197            �
           2606    33941    person person_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.person
    ADD CONSTRAINT person_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.person DROP CONSTRAINT person_pkey;
       public         postgres    false    199            �
           2606    33957    reserva reserva_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.reserva
    ADD CONSTRAINT reserva_pkey PRIMARY KEY (reserva_id);
 >   ALTER TABLE ONLY public.reserva DROP CONSTRAINT reserva_pkey;
       public         postgres    false    203            �
           2606    33984 /   detalle_reserva detalle_reserva_mesa_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.detalle_reserva
    ADD CONSTRAINT detalle_reserva_mesa_id_foreign FOREIGN KEY (mesa_id) REFERENCES public.mesa(mesa_id);
 Y   ALTER TABLE ONLY public.detalle_reserva DROP CONSTRAINT detalle_reserva_mesa_id_foreign;
       public       postgres    false    2731    207    205            �
           2606    33989 2   detalle_reserva detalle_reserva_reserva_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.detalle_reserva
    ADD CONSTRAINT detalle_reserva_reserva_id_foreign FOREIGN KEY (reserva_id) REFERENCES public.reserva(reserva_id);
 \   ALTER TABLE ONLY public.detalle_reserva DROP CONSTRAINT detalle_reserva_reserva_id_foreign;
       public       postgres    false    203    207    2729            �
           2606    33963 "   reserva reserva_horario_id_foreign    FK CONSTRAINT     �   ALTER TABLE ONLY public.reserva
    ADD CONSTRAINT reserva_horario_id_foreign FOREIGN KEY (horario_id) REFERENCES public.horario(horario_id);
 L   ALTER TABLE ONLY public.reserva DROP CONSTRAINT reserva_horario_id_foreign;
       public       postgres    false    2727    203    201            �
           2606    33958    reserva reserva_id_foreign    FK CONSTRAINT     u   ALTER TABLE ONLY public.reserva
    ADD CONSTRAINT reserva_id_foreign FOREIGN KEY (id) REFERENCES public.person(id);
 D   ALTER TABLE ONLY public.reserva DROP CONSTRAINT reserva_id_foreign;
       public       postgres    false    2725    203    199            6      x������ � �      0       x�3�44�20�2�44�Ɯ� :F��� Eht      4   -   x�3�4T�M-N�,�2�43��lcNc8ۄ��6�4��c���� �r�      ,   l   x�]�Q
�0 �osIb��.�g@�[GZv~�ZX��&F�Y0�𐗛V��y���'�x�vyfW�r��H96�V��iiX}[i�a�w���V5��fx� pB�      .     x�]��j!����@D��zK�-���C)�ɮ$W��C���3�źnC�Ό??>a@a����HX����e���<�1����;��Xg�s6i�N׫�C�����|BNv�5l�'
ޱ�pG�r�}�/�]c��O!�m�tSm��#ۏ7��n�%�UT8#��x�/g�W}�}��c�|��k)����q<�w�H>��8����2�����J�V=������!R��uJ�)ܪÂ}�����<Đ��iHu񵭋�:���q��d��_��}Y      2      x������ � �     