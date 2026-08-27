A plataforma de delivery iFood conecta clientes a diversos restaurantes, permitindo que pedidos sejam realizados de forma rápida e acompanhados até a entrega. Para essa atividade, você deverá desenvolver uma versão simplificada desse sistema, utilizando PHP e MySQL.

O sistema deverá trabalhar com três entidades principais: Cliente, Restaurante e Pedido.

A entidade Cliente deverá possuir os atributos id, nome, email, telefone e endereco.

A entidade Restaurante deverá possuir os atributos id, nome, categoria, telefone e endereco.

A entidade Pedido deverá possuir os atributos id, cliente_id, restaurante_id, data_pedido, valor e status.

O relacionamento entre Cliente e Pedido será 1:N, pois um cliente pode realizar vários pedidos. O relacionamento entre Restaurante e Pedido também será 1:N, pois um restaurante pode receber vários pedidos.

Uma nova plataforma de delivery está iniciando suas operações e precisa de um sistema para organizar os pedidos realizados pelos clientes.

Atualmente, os funcionários possuem dificuldade para identificar quais clientes fizeram pedidos, quais restaurantes receberam esses pedidos e qual é a situação de cada pedido.

Você deverá desenvolver o sistema responsável por organizar essas informações.

O sistema deverá permitir o cadastro, consulta, alteração e exclusão de clientes, restaurantes e pedidos.

Ao cadastrar um pedido, deverá ser possível selecionar um cliente e um restaurante já cadastrados. Na consulta dos pedidos, deverão aparecer as informações relacionadas, como o nome do cliente, o restaurante, o valor, a data e o status do pedido.

Entrega

Em um repositório você deve entregar individualmente. 

Desenvolva o sistema completo de gerenciamento de pedidos da plataforma.

Além de implementar o CRUD das três entidades, o sistema deverá utilizar corretamente os relacionamentos entre as tabelas.

Na tela de pedidos, utilize um JOIN para apresentar informações das três entidades.

Por exemplo:

Pedido	Cliente	Restaurante	Valor	Status
1	João Silva	Burger House	R$ 45,90	Entregue
2	Maria Souza	Pizza Center	R$ 72,00	Em preparo
3	João Silva	Pizza Center	R$ 58,50	Recebido

Desafio extra: crie uma tela que permita selecionar um cliente e visualizar todos os pedidos realizados por ele, mostrando também em quais restaurantes os pedidos foram realizados e o status de cada pedido.