<?php

/* StoreBundle:Default:default.html.twig */
class __TwigTemplate_9d4d68afe915e97aed3b80a29f23ce89f6053f78c69b42e8674c83100745a665 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Store/base.html.twig", "StoreBundle:Default:default.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Store/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f9cbe102a4f3e806cf7d4c1536d33e0ea4696de11c0d878147c27653a4ef7423 = $this->env->getExtension("native_profiler");
        $__internal_f9cbe102a4f3e806cf7d4c1536d33e0ea4696de11c0d878147c27653a4ef7423->enter($__internal_f9cbe102a4f3e806cf7d4c1536d33e0ea4696de11c0d878147c27653a4ef7423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreBundle:Default:default.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9cbe102a4f3e806cf7d4c1536d33e0ea4696de11c0d878147c27653a4ef7423->leave($__internal_f9cbe102a4f3e806cf7d4c1536d33e0ea4696de11c0d878147c27653a4ef7423_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_56a56f4ac233d9d62320d6006621410b7f5a212c1db06b5b516f9ba25b4b3397 = $this->env->getExtension("native_profiler");
        $__internal_56a56f4ac233d9d62320d6006621410b7f5a212c1db06b5b516f9ba25b4b3397->enter($__internal_56a56f4ac233d9d62320d6006621410b7f5a212c1db06b5b516f9ba25b4b3397_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
        <h3>Kies uw foto!</h3>
    </div>

    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("cart");
        echo "\"><button type=\"button\" class=\"btn btn-info pull-right\">Shopping Cart</button></a>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <table class=\"table\">
                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 15
            echo "                    <tr>
                        <td><img src=\"/uploads/documents/";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "imagePath", array()), "html", null, true);
            echo "\" alt=\"afbeelding is niet geladen, Sorry!\" style=width:160px;\"></td>
                        <td><b>€";
            // line 17
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["article"], "price", array()), 2), "html", null, true);
            echo "</b></td>
                        <td>
                            <a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_add", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-success\">Add one!</button></a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "            </table>
        </div>
    </div>

";
        
        $__internal_56a56f4ac233d9d62320d6006621410b7f5a212c1db06b5b516f9ba25b4b3397->leave($__internal_56a56f4ac233d9d62320d6006621410b7f5a212c1db06b5b516f9ba25b4b3397_prof);

    }

    public function getTemplateName()
    {
        return "StoreBundle:Default:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 23,  71 => 19,  66 => 17,  62 => 16,  59 => 15,  55 => 14,  47 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@Store/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <!-- Main jumbotron for a primary marketing message or call to action -->*/
/*     <div class="jumbotron">*/
/*         <h3>Kies uw foto!</h3>*/
/*     </div>*/
/* */
/*     <a href="{{ path('cart') }}"><button type="button" class="btn btn-info pull-right">Shopping Cart</button></a>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <table class="table">*/
/*                 {% for article in articles %}*/
/*                     <tr>*/
/*                         <td><img src="/uploads/documents/{{ article.imagePath }}" alt="afbeelding is niet geladen, Sorry!" style=width:160px;"></td>*/
/*                         <td><b>€{{ article.price | number_format(2) }}</b></td>*/
/*                         <td>*/
/*                             <a href="{{ path('cart_add', { 'id': article.id }) }}"><button type="button" class="btn btn-success">Add one!</button></a>*/
/*                         </td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/* {%  endblock %}*/
