<?php 

namespace App\Views;

define("PUBLIC_DIR", "./app/public");

class View {
    private string $header;
    private string $footer;

    public function __construct() {
        $this->header = file_get_contents("./app/views/templates/header.html");
        $this->footer = file_get_contents("./app/views/templates/footer.html");
    }

    public function render(string $page, array $args = []): void {
        $content = file_get_contents("./app/views/pages/" . $page . ".html");
        $allContent = $this->header . $content . $this->footer;

        $args['publicDir'] = PUBLIC_DIR;

        foreach ($args as $key => $value) {
            $allContent = str_replace("{{ $key }}", $value, $allContent);
        }

        echo $allContent;
    }
}
