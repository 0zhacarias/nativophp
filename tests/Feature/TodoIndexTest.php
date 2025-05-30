<?php

/* TODO:Fazer o teste de criação dos tudos */
    use Illuminate\Foundation\Testing\RefreshDatabase;

describe('index', function () {
    RefreshDatabase::class;
    it('a pagina trabalha sem nenhuma tarefa',function(){
   $response = $this->get('/');
    $response->assertStatus(200);
    });
 
});
