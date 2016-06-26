<?php

/* agent.html.twig */
class __TwigTemplate_35a94a8434a82708783f20e543e3a1ab6480510e659fa6522b3fdd219e9685a4 extends Twig_Template
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
        $__internal_922e821b5a22d33183993f393a1a5bba3acc2ff41f9cb6ccdc2d4deeb34974a6 = $this->env->getExtension("native_profiler");
        $__internal_922e821b5a22d33183993f393a1a5bba3acc2ff41f9cb6ccdc2d4deeb34974a6->enter($__internal_922e821b5a22d33183993f393a1a5bba3acc2ff41f9cb6ccdc2d4deeb34974a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "agent.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_922e821b5a22d33183993f393a1a5bba3acc2ff41f9cb6ccdc2d4deeb34974a6->leave($__internal_922e821b5a22d33183993f393a1a5bba3acc2ff41f9cb6ccdc2d4deeb34974a6_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_e872e610b9cfbeb87e5fb1d9aed15ebd411383204e028bc1e87899b113919c66 = $this->env->getExtension("native_profiler");
        $__internal_e872e610b9cfbeb87e5fb1d9aed15ebd411383204e028bc1e87899b113919c66->enter($__internal_e872e610b9cfbeb87e5fb1d9aed15ebd411383204e028bc1e87899b113919c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e872e610b9cfbeb87e5fb1d9aed15ebd411383204e028bc1e87899b113919c66->leave($__internal_e872e610b9cfbeb87e5fb1d9aed15ebd411383204e028bc1e87899b113919c66_prof);

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
