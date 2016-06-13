<?php

/* StoreBundle:Cart:index.html.twig */
class __TwigTemplate_9ee525d483811f48e74597b437d8921ed5a5e5228d71359a8e1971c7cefadde9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Store/base.html.twig", "StoreBundle:Cart:index.html.twig", 1);
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
        $__internal_c01d60123b1e49e2cad637e59e7da944c5a636cc5194e007c134b60feb90eb4c = $this->env->getExtension("native_profiler");
        $__internal_c01d60123b1e49e2cad637e59e7da944c5a636cc5194e007c134b60feb90eb4c->enter($__internal_c01d60123b1e49e2cad637e59e7da944c5a636cc5194e007c134b60feb90eb4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "StoreBundle:Cart:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c01d60123b1e49e2cad637e59e7da944c5a636cc5194e007c134b60feb90eb4c->leave($__internal_c01d60123b1e49e2cad637e59e7da944c5a636cc5194e007c134b60feb90eb4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ece7718c9e6ca7cd31969d4cd9f2a05cbe92cadba80fde072a89f7785b3f9f1 = $this->env->getExtension("native_profiler");
        $__internal_1ece7718c9e6ca7cd31969d4cd9f2a05cbe92cadba80fde072a89f7785b3f9f1->enter($__internal_1ece7718c9e6ca7cd31969d4cd9f2a05cbe92cadba80fde072a89f7785b3f9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>\"ID-College\" SHOPPING-CART</h1>

    <ul class=\"thumbnails\">

        ";
        // line 8
        if ((isset($context["empty"]) ? $context["empty"] : $this->getContext($context, "empty"))) {
            // line 9
            echo "            <h5>Your shopping cart is empty.</h5>
        ";
        }
        // line 11
        echo "        ";
        $context["cart"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "get", array(0 => "cart"), "method");
        // line 12
        echo "

        ";
        // line 14
        if ((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product"))) {
            // line 15
            echo "

            <div class=\"row\">
                <div class=\"col-md-6\">
                    <table class=\"table table-responsive\">
                        <thead>
                        <tr>
                            <th>Id</th>
                            <th>Quantity</th>
                            <th>Code</th>
                            <th>Price</th>
                            <th>Delete</th>
                         </tr>
                        </thead>
                        <tbody>

                ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 32
                echo "                    <tr>
                    <td>";
                // line 33
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</td>
                    <td>";
                // line 34
                echo twig_escape_filter($this->env, $context["item"], "html", null, true);
                echo "</td>


                    ";
                // line 37
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 38
                    echo "                        <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "code", array()), "html", null, true);
                    echo "</td>
                        <td>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
                    echo "</td>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "
                    <td><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_remove", array("id" => $context["key"])), "html", null, true);
                echo "\"><button class=\"btn btn-danger\">Remove</button></a></td>
                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "                        </tbody>
                    </table>

                </div>
            </div>

        ";
        }
        // line 52
        echo "    </ul>

    <a href=\"";
        // line 54
        echo $this->env->getExtension('routing')->getPath("start");
        echo "\"><button type=\"button\" class=\"btn btn-info col-lg-2 right\">Go on shopping!</button></a>


";
        
        $__internal_1ece7718c9e6ca7cd31969d4cd9f2a05cbe92cadba80fde072a89f7785b3f9f1->leave($__internal_1ece7718c9e6ca7cd31969d4cd9f2a05cbe92cadba80fde072a89f7785b3f9f1_prof);

    }

    public function getTemplateName()
    {
        return "StoreBundle:Cart:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  134 => 52,  125 => 45,  116 => 42,  113 => 41,  105 => 39,  100 => 38,  96 => 37,  90 => 34,  86 => 33,  83 => 32,  79 => 31,  61 => 15,  59 => 14,  55 => 12,  52 => 11,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@Store/base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>"ID-College" SHOPPING-CART</h1>*/
/* */
/*     <ul class="thumbnails">*/
/* */
/*         {% if empty %}*/
/*             <h5>Your shopping cart is empty.</h5>*/
/*         {% endif %}*/
/*         {% set cart = app.session.get('cart') %}*/
/* */
/* */
/*         {% if product %}*/
/* */
/* */
/*             <div class="row">*/
/*                 <div class="col-md-6">*/
/*                     <table class="table table-responsive">*/
/*                         <thead>*/
/*                         <tr>*/
/*                             <th>Id</th>*/
/*                             <th>Quantity</th>*/
/*                             <th>Code</th>*/
/*                             <th>Price</th>*/
/*                             <th>Delete</th>*/
/*                          </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/* */
/*                 {% for key, item in cart %}*/
/*                     <tr>*/
/*                     <td>{{ key }}</td>*/
/*                     <td>{{ item }}</td>*/
/* */
/* */
/*                     {% for item in product %}*/
/*                         <td>{{ item.code }}</td>*/
/*                         <td>{{ item.price }}</td>*/
/*                     {% endfor %}*/
/* */
/*                     <td><a href="{{ path('cart_remove', {'id': key}) }}"><button class="btn btn-danger">Remove</button></a></td>*/
/*                     </tr>*/
/*                 {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/* */
/*                 </div>*/
/*             </div>*/
/* */
/*         {% endif %}*/
/*     </ul>*/
/* */
/*     <a href="{{ path('start') }}"><button type="button" class="btn btn-info col-lg-2 right">Go on shopping!</button></a>*/
/* */
/* */
/* {% endblock %}*/
