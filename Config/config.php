<?php
    session_start();
    date_default_timezone_set("America/Bogota");
    const BASE_URL = "http://localhost/SMN947-PM";
    //Database
    const DB_HOST = "localhost";
    const DB_NAME = "smn947-pm";
    const DB_USER = "root";
    const DB_PASSWORD = "";
    const DB_CHARSET = "charset=utf-8";
    //Site Identity
    const SITE_TITLE = "SMN947-PM";
    const SITE_DESC = "A project Management App";

    //
    const STYLES = BASE_URL.'/Assets/css';
    const SCRIPTS = BASE_URL.'/Assets/js';
    const IMAGES = BASE_URL.'/Assets/images';
    const FONTS = BASE_URL.'/Assets/fonts';

    const RANDOM_PIC = 'https://picsum.photos/200.jpg'; /*<?= IMAGES ?>/user2-160x160.jpg*/
