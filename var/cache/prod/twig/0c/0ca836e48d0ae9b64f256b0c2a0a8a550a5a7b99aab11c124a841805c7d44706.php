<?php

/* base.html.twig */
class __TwigTemplate_9a1d297f97fb82e6415600ea56c19cc54dcabfce05fa841b0fad32f53a506e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c7731d181bf6244fd2c41423c29e4f3ebdb673d73e33c1b9c5672ef408a304d5 = $this->env->getExtension("native_profiler");
        $__internal_c7731d181bf6244fd2c41423c29e4f3ebdb673d73e33c1b9c5672ef408a304d5->enter($__internal_c7731d181bf6244fd2c41423c29e4f3ebdb673d73e33c1b9c5672ef408a304d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 13
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 14
        echo "    </body>
</html>
";
        
        $__internal_c7731d181bf6244fd2c41423c29e4f3ebdb673d73e33c1b9c5672ef408a304d5->leave($__internal_c7731d181bf6244fd2c41423c29e4f3ebdb673d73e33c1b9c5672ef408a304d5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8f3a87b8ab4a488aec68539fbe8bb8f2a8451cf037a817d0e5b1f163faa78ca7 = $this->env->getExtension("native_profiler");
        $__internal_8f3a87b8ab4a488aec68539fbe8bb8f2a8451cf037a817d0e5b1f163faa78ca7->enter($__internal_8f3a87b8ab4a488aec68539fbe8bb8f2a8451cf037a817d0e5b1f163faa78ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8f3a87b8ab4a488aec68539fbe8bb8f2a8451cf037a817d0e5b1f163faa78ca7->leave($__internal_8f3a87b8ab4a488aec68539fbe8bb8f2a8451cf037a817d0e5b1f163faa78ca7_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a960d4bcd9bfff4126c1b2004ceda4a0760f325d4408cefe4735e438afd65c02 = $this->env->getExtension("native_profiler");
        $__internal_a960d4bcd9bfff4126c1b2004ceda4a0760f325d4408cefe4735e438afd65c02->enter($__internal_a960d4bcd9bfff4126c1b2004ceda4a0760f325d4408cefe4735e438afd65c02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "          <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_a960d4bcd9bfff4126c1b2004ceda4a0760f325d4408cefe4735e438afd65c02->leave($__internal_a960d4bcd9bfff4126c1b2004ceda4a0760f325d4408cefe4735e438afd65c02_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0c226c4cd31ceed9d7d9b98b8324a01ef35c061664e34585730198f54718345 = $this->env->getExtension("native_profiler");
        $__internal_c0c226c4cd31ceed9d7d9b98b8324a01ef35c061664e34585730198f54718345->enter($__internal_c0c226c4cd31ceed9d7d9b98b8324a01ef35c061664e34585730198f54718345_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c0c226c4cd31ceed9d7d9b98b8324a01ef35c061664e34585730198f54718345->leave($__internal_c0c226c4cd31ceed9d7d9b98b8324a01ef35c061664e34585730198f54718345_prof);

    }

    // line 13
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_24284ff7f47a38d5039895318f2902f5899bdb5ee5702df36fa28b9a93293c0e = $this->env->getExtension("native_profiler");
        $__internal_24284ff7f47a38d5039895318f2902f5899bdb5ee5702df36fa28b9a93293c0e->enter($__internal_24284ff7f47a38d5039895318f2902f5899bdb5ee5702df36fa28b9a93293c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_24284ff7f47a38d5039895318f2902f5899bdb5ee5702df36fa28b9a93293c0e->leave($__internal_24284ff7f47a38d5039895318f2902f5899bdb5ee5702df36fa28b9a93293c0e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 13,  87 => 12,  77 => 7,  71 => 6,  59 => 5,  50 => 14,  47 => 13,  45 => 12,  38 => 9,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*           <link href="{{ asset('/css/bootstrap.css') }}" type="text/css" rel="stylesheet" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
