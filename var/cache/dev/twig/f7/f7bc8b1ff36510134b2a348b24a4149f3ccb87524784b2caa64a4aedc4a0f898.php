<?php

/* base.html.twig */
class __TwigTemplate_fe28244d799ea4ec016330ff9874381aa63819c6fdb5821292b8eaf97cd9d7c7 extends Twig_Template
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
        $__internal_0280f0b26a529395cd3b3879f874e49c7a9c476a3510ff5a9b00777320226528 = $this->env->getExtension("native_profiler");
        $__internal_0280f0b26a529395cd3b3879f874e49c7a9c476a3510ff5a9b00777320226528->enter($__internal_0280f0b26a529395cd3b3879f874e49c7a9c476a3510ff5a9b00777320226528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0280f0b26a529395cd3b3879f874e49c7a9c476a3510ff5a9b00777320226528->leave($__internal_0280f0b26a529395cd3b3879f874e49c7a9c476a3510ff5a9b00777320226528_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ad6a58fe83b3d4f0f7ddb01bcfaab18990d58541594cb12525ebfcf1ec0605f = $this->env->getExtension("native_profiler");
        $__internal_1ad6a58fe83b3d4f0f7ddb01bcfaab18990d58541594cb12525ebfcf1ec0605f->enter($__internal_1ad6a58fe83b3d4f0f7ddb01bcfaab18990d58541594cb12525ebfcf1ec0605f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_1ad6a58fe83b3d4f0f7ddb01bcfaab18990d58541594cb12525ebfcf1ec0605f->leave($__internal_1ad6a58fe83b3d4f0f7ddb01bcfaab18990d58541594cb12525ebfcf1ec0605f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c726b3b0916b6443066905e5dd6ce95f09f3f5ec6f9fe3d486afcf320603e495 = $this->env->getExtension("native_profiler");
        $__internal_c726b3b0916b6443066905e5dd6ce95f09f3f5ec6f9fe3d486afcf320603e495->enter($__internal_c726b3b0916b6443066905e5dd6ce95f09f3f5ec6f9fe3d486afcf320603e495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_c726b3b0916b6443066905e5dd6ce95f09f3f5ec6f9fe3d486afcf320603e495->leave($__internal_c726b3b0916b6443066905e5dd6ce95f09f3f5ec6f9fe3d486afcf320603e495_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_00076f4ea3d3319f2100ec10fe2924956fd98ff4a2a8ac07a774dbaeca882fe4 = $this->env->getExtension("native_profiler");
        $__internal_00076f4ea3d3319f2100ec10fe2924956fd98ff4a2a8ac07a774dbaeca882fe4->enter($__internal_00076f4ea3d3319f2100ec10fe2924956fd98ff4a2a8ac07a774dbaeca882fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_00076f4ea3d3319f2100ec10fe2924956fd98ff4a2a8ac07a774dbaeca882fe4->leave($__internal_00076f4ea3d3319f2100ec10fe2924956fd98ff4a2a8ac07a774dbaeca882fe4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_80d9059ae62d91e06ee36d5a1cc8301996d73d534b3fa33a79928bf18f74052e = $this->env->getExtension("native_profiler");
        $__internal_80d9059ae62d91e06ee36d5a1cc8301996d73d534b3fa33a79928bf18f74052e->enter($__internal_80d9059ae62d91e06ee36d5a1cc8301996d73d534b3fa33a79928bf18f74052e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_80d9059ae62d91e06ee36d5a1cc8301996d73d534b3fa33a79928bf18f74052e->leave($__internal_80d9059ae62d91e06ee36d5a1cc8301996d73d534b3fa33a79928bf18f74052e_prof);

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
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
