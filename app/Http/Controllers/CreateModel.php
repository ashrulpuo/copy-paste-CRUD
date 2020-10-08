<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Config;

class CreateModel extends Controller
{
    public static function GetColumns($tables) 
    {
        foreach ($tables as $key => $table) {
            $q = 'exec sp_columns '.$table;
            $getColumns[$key] = [
                'table' => $table,
                'columns' => DB::select($q)
            ];
        }

        $newStruc = [];
        foreach ($getColumns as $k => $column) {
            foreach ($column['columns'] as $y => $value) {
                $newStruc[$column['table']][] = $value->COLUMN_NAME;
            }
        }

        self::CreateModel($newStruc);
    }


    public static function CreateModel($table)
    {
        foreach($table as $key => $value) {
            $set = array_diff($value, [
                "ServerName",
                "HostName",
                "DaftarOleh",
                "KemaskiniOleh",
                "KemaskiniPada",
                "HapusOleh",
                "HapusPada",
            ]);

            $model = self::model($value, $key);
            $controller = self::controller($set, $key);
            $req = self::req($set, $key);
            $form = self::form($set, $key);
            $index = self::index($set, $key);
            $js = self::js($set, $key);

            dump($model);
            dump($controller);
            dump($req);
            dump($form);
            dump($index);
            dd($js);
        }
    }

    public static function model($set, $table)
    {
        $content = view('_model_template', ['set' => $set, 'table' => $table]);
        $path = app_path().'/Models';
        $modelFile = $path . $table . '.php';
        if (file_put_contents($modelFile, $content) !== false) {
            return ['success' => "Model created (" . basename($modelFile) . ")"];
        }
    }

    public static function controller($set, $table)
    {
        $content = view('_controller_template', ['set' => $set, 'table' => $table]);
        $path = app_path(). "/Http/Controllers/tetapan";
        $modelFile = $path . $table . 'Controller.php';
        if (file_put_contents($modelFile, $content) !== false) {
            return ['success' => "Controller (" . basename($modelFile) . ")"];
        }
    }

    public static function req($set, $table)
    {
        $content = view('_request_template', ['set' => $set, 'table' => $table]);
        $path = app_path(). "/Http/Requests/Tetapan";
        $modelFile = $path . $table . 'Request.php';
        if (file_put_contents($modelFile, $content) !== false) {
            return ['success' => "requests (" . basename($modelFile) . ")"];
        }
    }

    public static function form($set, $table)
    {
        $content = view('_form_template', ['set' => $set, 'table' => $table]);
        $convert = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $table));
        $path = Config::get('view.paths');
        $newPath = $path[0].'/tetapan'.'/'.$convert;
        if (!file_exists($newPath)) {
            mkdir($newPath, 0777, true);
            $modelFile = $newPath."/". "_form_" . $convert . '.blade.php';
            if (file_put_contents($modelFile, $content) !== false) {
                return ['success' => "form (" . basename($modelFile) . ")"];
            }   
        }
    }

    public static function index($set, $table)
    {
        $content = view('_index_template', ['set' => $set, 'table' => $table]);
        $convert = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $table));
        $path = Config::get('view.paths');
        $newPath = $path[0].'/tetapan'.'/'.$convert;
        if (file_exists($newPath)) {
            $modelFile = $newPath."/". 'index.blade.php';
            if (file_put_contents($modelFile, $content) !== false) {
                return ['success' => "index (" . basename($modelFile) . ")"];
            }   
        }
    }

    public static function js($column, $table)
    {
        $set = array_diff($column, ['Papar'] );
        $content = view('_js_template', ['set' => $set, 'table' => $table]);
        $convert = strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $table));
        $path = Config::get('view.paths');
        $newPath = $path[0]."/tetapan/js";

        if (file_exists($newPath)) {
            $modelFile = $newPath."/". substr($convert, 4) .'.js';
            if (file_put_contents($modelFile, $content) !== false) {
                return ['success' => "js (" . basename($modelFile) . ")"];
            }   
        }
    }
}
