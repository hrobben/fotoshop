<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_2620539df5bc468b65c579ba22bff11ddc9bf6f8afaffe5b3a523125bdc3ec64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("StoreBundle::base.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StoreBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a404d6c55b32f58c109f9a15752cb099a05a83602315e2b2e30d7fe154d4c4f = $this->env->getExtension("native_profiler");
        $__internal_1a404d6c55b32f58c109f9a15752cb099a05a83602315e2b2e30d7fe154d4c4f->enter($__internal_1a404d6c55b32f58c109f9a15752cb099a05a83602315e2b2e30d7fe154d4c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a404d6c55b32f58c109f9a15752cb099a05a83602315e2b2e30d7fe154d4c4f->leave($__internal_1a404d6c55b32f58c109f9a15752cb099a05a83602315e2b2e30d7fe154d4c4f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98d9bab5418612874a34dff356e6ba6410c7186616f0ea3c4782d3500eb4a895 = $this->env->getExtension("native_profiler");
        $__internal_98d9bab5418612874a34dff356e6ba6410c7186616f0ea3c4782d3500eb4a895->enter($__internal_98d9bab5418612874a34dff356e6ba6410c7186616f0ea3c4782d3500eb4a895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div class=\"alert alert-danger\" role=\"alert\">
        ";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
    </div>
";
        }
        // line 11
        echo "
<form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <h2 class=\"form-signin-heading\">Please sign in</h2>
    <label for=\"username\" class=\"sr-only\">";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Email address\" class=\"form-control\" required autofocus />
    <label for=\"password\" class=\"sr-only\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Password\" required />
    <div class=\"checkbox\">
        <label>
            <input type=\"checkbox\"
                   id=\"remember_me\"
                   name=\"_remember_me\"
                   value=\"on\" /> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
        </label>
    </div>
    <input type=\"submit\"
           class=\"btn btn-lg btn-primary btn-block\"
           id=\"_submit\"
           name=\"_submit\"
           value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_98d9bab5418612874a34dff356e6ba6410c7186616f0ea3c4782d3500eb4a895->leave($__internal_98d9bab5418612874a34dff356e6ba6410c7186616f0ea3c4782d3500eb4a895_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 32,  82 => 25,  72 => 18,  68 => 17,  64 => 16,  58 => 13,  54 => 12,  51 => 11,  45 => 8,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends 'StoreBundle::base.html.twig' %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div class="alert alert-danger" role="alert">*/
/*         {{ error.messageKey|trans(error.messageData, 'security') }}*/
/*     </div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post" class="form-signin">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <h2 class="form-signin-heading">Please sign in</h2>*/
/*     <label for="username" class="sr-only">{{ 'security.login.username'|trans }}</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" placeholder="Email address" class="form-control" required autofocus />*/
/*     <label for="password" class="sr-only">{{ 'security.login.password'|trans }}</label>*/
/*     <input type="password" id="password" name="_password" class="form-control" placeholder="Password" required />*/
/*     <div class="checkbox">*/
/*         <label>*/
/*             <input type="checkbox"*/
/*                    id="remember_me"*/
/*                    name="_remember_me"*/
/*                    value="on" /> {{ 'security.login.remember_me'|trans }}*/
/*         </label>*/
/*     </div>*/
/*     <input type="submit"*/
/*            class="btn btn-lg btn-primary btn-block"*/
/*            id="_submit"*/
/*            name="_submit"*/
/*            value="{{ 'security.login.submit'|trans }}" />*/
/* </form>*/
/* {% endblock %}*/
