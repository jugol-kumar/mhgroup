<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use App\Http\Helpers\Cpanel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class DashboardController extends Controller
{
    public function dashboard(){

        $cpanel = new Cpanel();

//        $diskInfo     = $cpanel->getCpanelDiskQuotaInfo();
//        $dbInfo       = $cpanel->listDatabases();
//        $storageInfo  = $cpanel->callUAPI('Quota', 'get_quota_info');
//
//        $allDatabases = $dbInfo['data']->data;
//        $diskData     = $diskInfo['data']->data;
//        $storageInfo  = $storageInfo['data']->data;
//
//
//        // using limit
//        $usingLimit = $diskData->bytes_used / 1024 / 1024 / 1024;
//        // total limit
//        $totalLimit = $diskData->byte_limit / 1024 / 1024 / 1024;
//
//        $arr = [];
//        $arr['total_using']   = number_format($usingLimit, 2);
//        $arr['total_limit']   = number_format($totalLimit, 2);
//        $arr['total_files']   = number_format($diskData->inode_limit);
//        $arr['files_using']   = number_format($diskData->inodes_used);
//        $arr['all_databases'] = $allDatabases;
//        $arr['storage_info']  = $storageInfo;
//        return $arr;

        return view('backend.dashboard');
    }





}
