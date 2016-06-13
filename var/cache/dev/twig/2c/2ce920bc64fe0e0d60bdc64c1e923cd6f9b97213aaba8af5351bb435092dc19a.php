<?php

/* StoreBundle:articles:index.html.twig */
class __TwigTemplate_e74f6c1d46632598630beda32cd5a8c5bb3ddb695f8e7b45c6072f3757edc774 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StoreBundle::base.html.twig", "StoreBundle:articles:index.html.twig", 1);
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
        $__internal_a9ba372b6703a54164fd957dc160733972038fcff94391c5d926f4596b1ad3e9 = $this->env->getExtension("native_profiler");
        $__internal_a9ba372b6703a54164fd957dc160733972038fcff94391c5d926f4596b1ad3e9->enter($__internal_a9ba372b6703a54164fd957dc160733972038fcff94391c5d926f4596b1ad3e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreBundle:articles:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9ba372b6703a54164fd957dc160733972038fcff94391c5d926f4596b1ad3e9->leave($__internal_a9ba372b6703a54164fd957dc160733972038fcff94391c5d926f4596b1ad3e9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6da72b11a04d7043554a502927a028505b349c0b67dfc9e4c967324cf95f1049 = $this->env->getExtension("native_profiler");
        $__internal_6da72b11a04d7043554a502927a028505b349c0b67dfc9e4c967324cf95f1049->enter($__internal_6da72b11a04d7043554a502927a028505b349c0b67dfc9e4c967324cf95f1049_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    ";
        // line 5
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 6
            echo "    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
    <h1>Articles list</h1>
    </div>

    <a href=\"";
            // line 11
            echo $this->env->getExtension('routing')->getPath("articles_new");
            echo "\"><button type=\"button\" class=\"btn btn-primary\">New Article</button></a>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <table class=\"table table-responsive\">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Code</th>
                    <th>Catagory</th>
                    <th>Imagepath</th>
                    <th>Price</th>
                    <th>Dateadd</th>
                    <th>Dateedit</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 30
                echo "                <tr>
                    <td><a href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "id", array()), "html", null, true);
                echo "</a></td>
                    <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "code", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "catagory", array()), "html", null, true);
                echo "</td>
                    <td><img src=\"/uploads/documents/";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "imagePath", array()), "html", null, true);
                echo "\" alt=\"image\" style=width:60px;\"></td>
                    <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "price", array()), "html", null, true);
                echo "</td>
                    <td>";
                // line 36
                if ($this->getAttribute($context["article"], "dateAdd", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateAdd", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                    <td>";
                // line 37
                if ($this->getAttribute($context["article"], "dateEdit", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["article"], "dateEdit", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                    <td>
                         <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_show", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-xs btn-info\">show</button></a>
                         <a href=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("articles_edit", array("id" => $this->getAttribute($context["article"], "id", array()))), "html", null, true);
                echo "\"><button type=\"button\" class=\"btn btn-xs btn-primary\">edit</button></a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "            </tbody>
        </table>

        </div>
    </div>

        <a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("articles_new");
            echo "\"><button type=\"button\" class=\"btn btn-primary\">New Article</button></a>
    ";
        } else {
            // line 52
            echo "        <h3>U dient eerst als adminUser aanmelden!</h3>
    ";
        }
        // line 54
        echo "
";
        
        $__internal_6da72b11a04d7043554a502927a028505b349c0b67dfc9e4c967324cf95f1049->leave($__internal_6da72b11a04d7043554a502927a028505b349c0b67dfc9e4c967324cf95f1049_prof);

    }

    public function getTemplateName()
    {
        return "StoreBundle:articles:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 54,  142 => 52,  137 => 50,  129 => 44,  119 => 40,  115 => 39,  108 => 37,  102 => 36,  98 => 35,  94 => 34,  90 => 33,  86 => 32,  80 => 31,  77 => 30,  73 => 29,  52 => 11,  45 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'StoreBundle::base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     {% if is_granted("ROLE_ADMIN") %}*/
/*     <!-- Main jumbotron for a primary marketing message or call to action -->*/
/*     <div class="jumbotron">*/
/*     <h1>Articles list</h1>*/
/*     </div>*/
/* */
/*     <a href="{{ path('articles_new') }}"><button type="button" class="btn btn-primary">New Article</button></a>*/
/* */
/*     <div class="row">*/
/*         <div class="col-md-6">*/
/*             <table class="table table-responsive">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th>Id</th>*/
/*                     <th>Code</th>*/
/*                     <th>Catagory</th>*/
/*                     <th>Imagepath</th>*/
/*                     <th>Price</th>*/
/*                     <th>Dateadd</th>*/
/*                     <th>Dateedit</th>*/
/*                     <th>Actions</th>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for article in articles %}*/
/*                 <tr>*/
/*                     <td><a href="{{ path('articles_show', { 'id': article.id }) }}">{{ article.id }}</a></td>*/
/*                     <td>{{ article.code }}</td>*/
/*                     <td>{{ article.catagory }}</td>*/
/*                     <td><img src="/uploads/documents/{{ article.imagePath }}" alt="image" style=width:60px;"></td>*/
/*                     <td>{{ article.price }}</td>*/
/*                     <td>{% if article.dateAdd %}{{ article.dateAdd|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td>{% if article.dateEdit %}{{ article.dateEdit|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                     <td>*/
/*                          <a href="{{ path('articles_show', { 'id': article.id }) }}"><button type="button" class="btn btn-xs btn-info">show</button></a>*/
/*                          <a href="{{ path('articles_edit', { 'id': article.id }) }}"><button type="button" class="btn btn-xs btn-primary">edit</button></a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/*         </div>*/
/*     </div>*/
/* */
/*         <a href="{{ path('articles_new') }}"><button type="button" class="btn btn-primary">New Article</button></a>*/
/*     {% else %}*/
/*         <h3>U dient eerst als adminUser aanmelden!</h3>*/
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
