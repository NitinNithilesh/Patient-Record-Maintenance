<?php
include ('dumper.php');

try {
    $world_dumper = Shuttle_Dumper::create(array(
        'host' => '',
        'username' => 'root',
        'password' => '',
        'db_name' => 'clinic',
    ));

    // dump the database to gzipped file
    $world_dumper->dump('clinic.sql.gz');

    // dump the database to plain text file
    $world_dumper->dump('clinic.sql');



    // $wp_dumper = Shuttle_Dumper::create(array(
    //  'host' => '',
    //  'username' => 'root',
    //  'password' => '',
    //  'db_name' => 'tom_db',
    // ));

    // // Dump only the tables with wp_ prefix
    // $wp_dumper->dump('tom_db.sql', 'wp_');

    // $countries_dumper = Shuttle_Dumper::create(array(
    //  'host' => '',
    //  'username' => 'root',
    //  'password' => '',
    //  'db_name' => 'tom_db',
    //  'include_tables' => array('country', 'city'), // only include those tables
    // ));
    // $countries_dumper->dump('tom_db.sql.gz');

    // $world_dumper = Shuttle_Dumper::create(array(
    //  'host' => '',
    //  'username' => 'root',
    //  'password' => '',
    //  'db_name' => 'tom_db',
    //  'exclude_tables' => array('city'),
    // ));
    // $world_dumper->dump('world-no-cities.sql.gz');
    echo "<script type='text/javascript'>alert('Backup Sucessfull..!!');</script>";
    include "home.php";
} catch(Shuttle_Exception $e) {
  echo "<script type='text/javascript'>alert('Could not Backup..!!');</script>";
  include "home.php";
}
