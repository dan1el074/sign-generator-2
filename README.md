# sign-generator

**sign-generator** é uma aplicação desenvolvida em **PHP puro** que permite gerar assinaturas de e-mail padronizadas para os colaboradores da [**Metaro Indústria e Comércio LTDA**](https://metaro.com.br/).  
O sistema possui estrutura **MVC**, camada de serviço, interfaces e classes abstratas, garantindo flexibilidade e manutenção facilitada.

## Funcionalidade

O sistema tem como objetivo **gerar automaticamente assinaturas de e-mail personalizadas**, seguindo o padrão visual da empresa e permitindo múltiplas configurações de layout e informações de contato.

## Configuração e execução

1. Certifique-se de ter o **Apache** instalado e com o módulo `mod_rewrite` habilitado.  
2. Clone este repositório para o diretório público do seu servidor Apache (ex: `htdocs` ou `www`):
  ```bash
  git clone git@github.com:dan1el074/sign-generator-2.git
  ```
4. Verifique se a pasta do projeto foi criada.
5. Inicie o servidor (caso esteja usando um ambiente local como XAMPP, Laragon ou WAMP).
6. No navegador, acesse:
  ```bash
  http://localhost/sign-generator
  ```

## Apresentação

Design moderno e responsivo, sendo possível ser usado em diversos tamanhos de tela:

<img src="https://metaro.com.br/images/screenshot-20251103-151420.png">

## Observações

- O projeto não depende de frameworks externos.

- Pode ser facilmente adaptado para diferentes layouts de assinatura.

- O uso de URLs amigáveis é configurado via .htaccess.
