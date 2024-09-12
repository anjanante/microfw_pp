<?php

class Template{
    function getContent(){
        $template = <<<EOF
    <form method="POST" action="app.php/submit">
        <input name="name">
        <button type="submit">Send</button>
    </form>
    EOF;
        return $template;
    }
    
    function postContent($request){
        $name = $request->get('name');
        return sprintf('Hello %s', $name);
    }
}