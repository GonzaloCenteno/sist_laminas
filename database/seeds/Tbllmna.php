<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Tbllmna extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbllmna')->insert([
            'tbllmnacoda'  => '016',
            'tbllmnanomb'  => 'MAPA HIDROGRAFICO DE PERU',
            'tbllmnadesc'  => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'tbllmnauuid'  => 'asd32423fdsf',
            'tbllmnaimgn'  => 'adjuntos/j8ctCtQHeTCZ_004.jpg',
            'tbllmnafech'  => date('Y-m-d'),
            'tbllmnatags'  => 'FUNCIONES, CLASIFICACION, PECIOLO, LIMBO, RESPIRACION',
            'tblctgacdgo'  => 1,
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);

        DB::table('tbllmna')->insert([
            'tbllmnacoda'  => '050',
            'tbllmnanomb'  => 'FRUTO Y SEMILLA',
            'tbllmnadesc'  => 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using Content here, content here, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for lorem ipsum will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).',
            'tbllmnauuid'  => 'FERGFH45674HFGvbbvcvb2346',
            'tbllmnaimgn'  => 'adjuntos/itIoGyYAHA1o_006.jpg',
            'tbllmnafech'  => date('Y-m-d'),
            'tbllmnatags'  => 'COMIDA, FRUTAS, CARBOHIDRATOS, ALIMENTOS, JOVEN',
            'tblctgacdgo'  => 5,
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);

        DB::table('tbllmna')->insert([
            'tbllmnacoda'  => '033',
            'tbllmnanomb'  => 'DIA DEL MAESTRO',
            'tbllmnadesc'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
            'tbllmnauuid'  => 'ASDASD24534Gdddvcvcvbcvvb_dfgdf',
            'tbllmnaimgn'  => 'adjuntos/WJyH5Q3F63ZH_007.jpg',
            'tbllmnafech'  => date('Y-m-d'),
            'tbllmnatags'  => 'PROFESOR, COLEGIO, EDUCACION, EDUCATIVO, ESTADO',
            'tblctgacdgo'  => 8,
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);

        DB::table('tbllmna')->insert([
            'tbllmnacoda'  => '054',
            'tbllmnanomb'  => 'LOS 14 INCAS DEL TAHUANTINSUYO',
            'tbllmnadesc'  => 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.',
            'tbllmnauuid'  => 'dfsf4534fdgdfc',
            'tbllmnaimgn'  => 'adjuntos/uIomSXhiJOA6_8yNYv30hblKS_002.jpg',
            'tbllmnafech'  => date('Y-m-d'),
            'tbllmnatags'  => 'INCAS, CUSCO, MACHU PICHU, 14',
            'tblctgacdgo'  => 9,
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);

        DB::table('tbllmna')->insert([
            'tbllmnacoda'  => '055',
            'tbllmnanomb'  => 'DIA DE LA BANDERA',
            'tbllmnadesc'  => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.',
            'tbllmnauuid'  => '12324dsxccbc-fsdf-56',
            'tbllmnaimgn'  => 'adjuntos/sruVn5YssX0z_003.jpg',
            'tbllmnafech'  => date('Y-m-d'),
            'tbllmnatags'  => 'BANDERA, PERU, DIA DE INDEPENDENCIA, EDUCATIVO, ESTADO',
            'tblctgacdgo'  => 9,
            'created_at'   => Carbon::now(),
            'updated_at'   => Carbon::now()
        ]);
    }
}
