<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('array_to_csv'))
{
    function array_to_csv($array, $download = "")
    {
        //print_r($array);die;
        if ($download != "")
        {
            header('Content-Type: application/csv');
            header('Content-Disposition: attachement; filename="' . $download . '"');
        }

        $handle = fopen('php://temp', 'r+');
        $contents = '';
        foreach ($array as $line) {
            fputcsv($handle, $line, ',', '"');
        }
        rewind($handle);
        while (!feof($handle)) {
            $contents .= fread($handle, 8192);
        }
        fclose($handle);
        echo $contents;
    }
}

if ( ! function_exists('query_to_csv'))
{
    function query_to_csv($query, $headers = TRUE, $download = "")
    {
        if ( ! is_object($query) OR ! method_exists($query, 'list_fields'))
        {
            show_error('invalid query');
        }

        $array = array();

        if ($headers)
        {
            $line = array();
            foreach ($query->list_fields() as $name)
            {
                $line[] = $name;
            }
            $array[] = $line;
        }

        foreach ($query->result_array() as $row)
        {
            $line = array();
            foreach ($row as $item)
            {
                $line[] = $item;
            }
            $array[] = $line;
        }

        echo array_to_csv($array, $download);
    }
}