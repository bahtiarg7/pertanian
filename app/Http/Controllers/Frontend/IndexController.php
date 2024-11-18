<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Silder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {

        $silders = Silder::where('is_active', true)->get();
        $post_data="client_id=9o8IWJIo0Wn_RJcAaW3zrTlAepYa&client_secret=UiOlqsJRQy5tWS3Ttuw5I8dz7q4a&grant_type=client_credentials";
        $url = 'https://splp.layanan.go.id/oauth2/token/';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        // $res = json_decode($result,true);
        $responseInfo = curl_getinfo($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $body = substr($result, $header_size);
        $result_data=array();
        $result_data['httpCode']=$httpCode;
        $result_data['body']=json_decode($body);
        $result_data['responseInfo']=$responseInfo;
        // print_r($httpCode);
        // print_r($result['body']); exit;
        curl_close($ch);
        if($httpCode == 200){
            // echo "berhasil";
            $res = json_decode($result,true);
            $sukses = 1;
        }else{
            // echo "gagal";
            $sukses = 0;
        }
        // print_r($res);
        // echo $res["access_token"];
        if ($sukses) {
            $url = 'https://api-splp.layanan.go.id/t/bekasikab.go.id/berita-bekasikab-2/2/apinews/data/berita/list';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Accept: application/json','Authorization: Bearer ' . $res["access_token"]));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            $result2 = curl_exec($ch);
            // $res2 = json_decode($result2);
            $responseInfo = curl_getinfo($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $body = substr($result2, $header_size);
            $result_data=array();
            $result_data['httpCode']=$httpCode;
            $result_data['body']=json_decode($body);
            $result_data['responseInfo']=$responseInfo;
            // print_r($httpCode);
            // print_r($result['body']); exit;
            // print_r($result['body']); exit;
            curl_close($ch);
            if($httpCode == 200){
                // echo "berhasil";
                $res2 = json_decode($result2,true);
                $sukses2 = 1;
            }else{
                // echo "gagal";
                $sukses2 = 0;
            }
            if ($sukses2) {
                for ($i=0; $i < 10; $i++) {
                    $berita[] = array(
                        'img' => str_replace(" ","%20",$res2["data"][$i]["img"]),
                        'judul' => $res2["data"][$i]["judul"],
                        'url' => $res2["data"][$i]["url"],
                        'author' => $res2["data"][$i]["author"],
                        'tgl' => $res2["data"][$i]["tgl"],
                        'kategori' => $res2["data"][$i]["kategori"],
                    );
                }
            }else{
                $berita[] = array(
                    'img' => '',
                    'judul' => '',
                    'url' => '#',
                    'author' => '',
                    'tgl' => '',
                    'kategori' => '',
                );
            }
        }else{
            $berita[] = array(
                'img' => '',
                'judul' => '',
                'url' => '#',
                'author' => '',
                'tgl' => '',
                'kategori' => '',
            );
        }

        return view('frontend.index',['silders'=>$silders,'data'=>$berita]);
    }
}
