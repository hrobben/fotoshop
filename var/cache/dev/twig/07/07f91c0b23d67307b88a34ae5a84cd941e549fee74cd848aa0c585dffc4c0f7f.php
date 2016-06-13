<?php

/* StoreBundle:articles:show.html.twig */
class __TwigTemplate_0ff24306446fafce1f91e91f8547024254c12c93ecddcd2b016ba5fbd18b341d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StoreBundle::base.html.twig", "StoreBundle:articles:show.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_335e9142dfb0140a2a9145a41901450e0c7923edf3bf9d3598c0453b3e91dd93 = $this->env->getExtension("native_profiler");
        $__internal_335e9142dfb0140a2a9145a41901450e0c7923edf3bf9d3598c0453b3e91dd93->enter($__internal_335e9142dfb0140a2a9145a41901450e0c7923edf3bf9d3598c0453b3e91dd93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreBundle:articles:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_335e9142dfb0140a2a9145a41901450e0c7923edf3bf9d3598c0453b3e91dd93->leave($__internal_335e9142dfb0140a2a9145a41901450e0c7923edf3bf9d3598c0453b3e91dd93_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a44a17a5e9102618546441f12cd1b04d653baa7b829c8ffe252387602fd6031 = $this->env->getExtension("native_profiler");
        $__internal_9a44a17a5e9102618546441f12cd1b04d653baa7b829c8ffe252387602fd6031->enter($__internal_9a44a17a5e9102618546441f12cd1b04d653baa7b829c8ffe252387602fd6031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
        <h1>Articles</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <table class=\"table\">
                <tbody>
                    <tr>
                        <td><img src=\"/uploads/documents/";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "imagePath", array()), "html", null, true);
        echo "\" alt=\"image\" style=height:150px;\"></td>
                    </tr>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Code</th>
                        <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "code", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Catagory</th>
                        <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "catagory", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Imagepath</th>
                        <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "imagePath", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Price</th>
                        <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "price", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Dateadd</th>
                        <td>";
        // line 38
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateAdd", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateAdd", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                    </tr>
                    <tr>
                        <th>Dateedit</th>
                        <td>";
        // line 42
        if ($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateEdit", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "dateEdit", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("articles_index");
        echo "\"><button type=\"button\" class=\"btn btn-info col-lg-2 right\">Back to List</button></a>
    <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\"><button type=\"button\" class=\"btn btn-primary center-block col-lg-3\">Edit</button></a>
    ";
        // line 51
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
        <button type=\"submit\" class=\"btn pull-right btn-danger\">Delete</button>
    ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
";
        
        $__internal_9a44a17a5e9102618546441f12cd1b04d653baa7b829c8ffe252387602fd6031->leave($__internal_9a44a17a5e9102618546441f12cd1b04d653baa7b829c8ffe252387602fd6031_prof);

    }

    public function getTemplateName()
    {
        return "StoreBundle:articles:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 53,  123 => 51,  119 => 50,  115 => 49,  103 => 42,  94 => 38,  87 => 34,  80 => 30,  73 => 26,  66 => 22,  59 => 18,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'StoreBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <!-- Main jumbotron for a primary marketing message or call to action -->*/
/*     <div class="jumbotron">*/
/*         <h1>Articles</h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <table class="table">*/
/*                 <tbody>*/
/*                     <tr>*/
/*                         <td><img src="/uploads/documents/{{ article.imagePath }}" alt="image" style=height:150px;"></td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Id</th>*/
/*                         <td>{{ article.id }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Code</th>*/
/*                         <td>{{ article.code }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Catagory</th>*/
/*                         <td>{{ article.catagory }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Imagepath</th>*/
/*                         <td>{{ article.imagePath }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Price</th>*/
/*                         <td>{{ article.price }}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Dateadd</th>*/
/*                         <td>{% if article.dateAdd %}{{ article.dateAdd|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     </tr>*/
/*                     <tr>*/
/*                         <th>Dateedit</th>*/
/*                         <td>{% if article.dateEdit %}{{ article.dateEdit|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     </tr>*/
/*                 </tbody>*/
/*             </table>*/
/*         </div>*/
/*     </div>*/
/* */
/*     <a href="{{ path('articles_index') }}"><button type="button" class="btn btn-info col-lg-2 right">Back to List</button></a>*/
/*     <a href="{{ path('articles_edit', { 'id': article.id }) }}"><button type="button" class="btn btn-primary center-block col-lg-3">Edit</button></a>*/
/*     {{ form_start(delete_form) }}*/
/*         <button type="submit" class="btn pull-right btn-danger">Delete</button>*/
/*     {{ form_end(delete_form) }}*/
/* {% endblock %}*/
/* */
