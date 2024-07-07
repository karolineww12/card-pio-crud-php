<?php

require('conexao.php');

//inserir dados dos produtos
$pdo->exec("INSERT INTO produtos (nome, descricao, preco, imagem) VALUES 
     'hamburguer', 'hamburguer de carne bovina, queijo, alface, tomate e molho especial', 15.00, 'https://images.unsplash.com/photo-1571091718767-18b5b1457add?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YnVyZ3VlcnxlbnwwfDB8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60')");
$pdo->exec("INSERT INTO produtos (nome, descricao, preco, imagem) VALUES 
    ('carbonara', 'massa italiana, molho branco, bacon, queijo parmesão e ovo', 35.00, 'https://images.unsplash.com/photo-1612874742237-6526221588e3?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')");
$pdo->exec("INSERT INTO produtos (nome, descricao, preco, imagem) VALUES 
    ('pizza', 'massa italiana, molho de tomate, queijo, calabresa, cebola e azeitona', 25.00, 'hhttps://images.unsplash.com/photo-1564128442383-9201fcc740eb?q=80&w=931&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')");
$pdo->exec("INSERT INTO produtos (nome, descricao, preco, imagem) VALUES 
    ('calzone', 'massa italiana, molho de tomate, queijo, pepperoni e manjericão', 15.00, 'https://images.unsplash.com/photo-1628824851008-ec3ab4b45527?q=80&w=930&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')");