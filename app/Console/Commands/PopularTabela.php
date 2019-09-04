<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App;

class PopularTabela extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:popular';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Preenche nas tabelas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
               
        $vnome [] = 'Denner';
        $vnome [] = 'Cris';
        $vnome [] = 'Gabriel';
        $vnome [] = 'Alexandre';
        $vnome [] = 'Ptrus';
        
        $cpf [] = '99999999999';
        $cpf [] = '99999999995';
        $cpf [] = '99999999994';
        $cpf [] = '99999999993';
        $cpf [] = '99999999992';
        
        $end [] = 'Rua Joaquim Zucco 127';
        $end [] = 'Rua Ruan Zucco 222';
        $end [] = 'Rua Bruno Zucco 111';
        $end [] = 'Rua Navi Zucco 196';
        $end [] = 'Rua kuler Zucco 185';
        
        $bai [] = 'Barracão';
        $bai [] = 'Santa rita';
        $bai [] = 'Santa Terezinha';
        $bai [] = 'Planalto';
        $bai [] = 'Limeira Limeira';
        
        $cid [] = 'Brusque';
        $cid [] = 'Dom Joaquim';
        $cid [] = 'João Batista';
        $cid [] = 'Barcelona';
        $cid [] = 'Madrid';
        
        $uf [] = 'SC';
        $uf [] = 'PR';
        $uf [] = 'RJ';
        $uf [] = 'SP';
        $uf [] = 'RS';
        
        $tel [] = '11111111111';
        $tel [] = '11111111112';
        $tel [] = '11111111113';
        $tel [] = '11111111114';
        $tel [] = '11111111115';
        
        $num [] = 1;
        $num [] = 2;
        $num [] = 3;
        $num [] = 4;
        $num [] = 5;
        
        for($i = 0; $i < 5 ; $i++){
            $cliente = new App\Cliente();
            $cliente->nomcli = $vnome[$i];
            $cliente->cpfcli = $cpf[$i];
            $cliente->endcli = $end[$i];
            $cliente->numcli = $num[$i];
            $cliente->baicli = $bai[$i];
            $cliente->cidcli = $cid[$i];
            $cliente->ufcli = $uf[$i];
            $cliente->telcli = $tel[$i];
            $cliente->save();
        }
    }
}
