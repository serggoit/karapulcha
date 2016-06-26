<?php

/* agent.html.twig */
class __TwigTemplate_841273bc3b8aa79b0dff7424f636757abba658b63d925e1cb91d9f9edefe2b64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "agent.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71f03b3003ba9ba55f2e352ee13b4991f6732a4eb9ba98a7f96b1715a35ad61b = $this->env->getExtension("native_profiler");
        $__internal_71f03b3003ba9ba55f2e352ee13b4991f6732a4eb9ba98a7f96b1715a35ad61b->enter($__internal_71f03b3003ba9ba55f2e352ee13b4991f6732a4eb9ba98a7f96b1715a35ad61b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71f03b3003ba9ba55f2e352ee13b4991f6732a4eb9ba98a7f96b1715a35ad61b->leave($__internal_71f03b3003ba9ba55f2e352ee13b4991f6732a4eb9ba98a7f96b1715a35ad61b_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_886f05e34c9a8e97d1468ef6e7a8e9a3f9e8a0f0cc1a46e47492f97061572167 = $this->env->getExtension("native_profiler");
        $__internal_886f05e34c9a8e97d1468ef6e7a8e9a3f9e8a0f0cc1a46e47492f97061572167->enter($__internal_886f05e34c9a8e97d1468ef6e7a8e9a3f9e8a0f0cc1a46e47492f97061572167_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <h1> ";
        echo twig_escape_filter($this->env, (isset($context["Yu"]) ? $context["Yu"] : $this->getContext($context, "Yu")), "html", null, true);
        echo "</h1>
<form role=\"form\" class=\"form\">
        <div class=\"row\">
              <div class=\"col-sm-2 col-md-2\">
               <button type=\"button\" class=\"btn btn-primary btn-block\" >Просмотр цен</button>\t\t
\t\t\t   <button type=\"button\" class=\"btn btn-primary btn-block\" >Спарсить цены</button>\t\t
\t          </div>
</div>
</form>
";
        
        $__internal_886f05e34c9a8e97d1468ef6e7a8e9a3f9e8a0f0cc1a46e47492f97061572167->leave($__internal_886f05e34c9a8e97d1468ef6e7a8e9a3f9e8a0f0cc1a46e47492f97061572167_prof);

    }

    public function getTemplateName()
    {
        return "agent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 5,  34 => 4,  11 => 2,);
    }
}
/* {# app/Resources/views/agent.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1> {{ Yu }}</h1>*/
/* <form role="form" class="form">*/
/*         <div class="row">*/
/*               <div class="col-sm-2 col-md-2">*/
/*                <button type="button" class="btn btn-primary btn-block" >Просмотр цен</button>		*/
/* 			   <button type="button" class="btn btn-primary btn-block" >Спарсить цены</button>		*/
/* 	          </div>*/
/* </div>*/
/* </form>*/
/* {% endblock %}*/
