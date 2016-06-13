<?php

/* @Store/base.html.twig */
class __TwigTemplate_20ff54065ef07defc0f5d3044ff35502870ea826ebc650061f69872df718b309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26455bbac88fb333dfdb44496bb889810eece0b8ca44557dec008be018095d3e = $this->env->getExtension("native_profiler");
        $__internal_26455bbac88fb333dfdb44496bb889810eece0b8ca44557dec008be018095d3e->enter($__internal_26455bbac88fb333dfdb44496bb889810eece0b8ca44557dec008be018095d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Store/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/store/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Bootstrap theme -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/store/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href=\"../../assets/css/ie10-viewport-bug-workaround.css\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/store/css/theme.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->
    <script src=\"../../assets/js/ie-emulation-modes-warning.js\"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->

    ";
        // line 30
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
</head>
<body role=\"document\">
<!-- Fixed navbar -->
<nav class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("store_default_bootstrap");
        echo "\">Bootstrap theme</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
                <li class=\"active\"><a href=\"/\">Home</a></li>
                ";
        // line 49
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 50
            echo "                    <li><a href=\"/logout\">logoff</a></li>
                ";
        } else {
            // line 52
            echo "                    <li><a href=\"/login\">login</a></li>
                ";
        }
        // line 54
        echo "                <li><a href=\"#contact\">Contact</a></li>
                ";
        // line 55
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 56
            echo "                    <li class=\"dropdown\">
                        <a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("articles_index");
            echo "\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Beheer <span class=\"caret\"></span></a>
                        <ul class=\"dropdown-menu\">
                             <li><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("articles_new");
            echo "\">new</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <!-- <li class=\"dropdown-header\">Nav header</li>
                            <li><a href=\"#\">Separated link</a></li-->
                            <li><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("articles_index");
            echo "\">Article list</a></li>
                        </ul>
                    </li>
                ";
        }
        // line 67
        echo "            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class=\"container theme-showcase\" role=\"main\">
    ";
        // line 73
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 74
        $this->displayBlock('body', $context, $blocks);
        // line 75
        $this->displayBlock('javascripts', $context, $blocks);
        // line 81
        echo "</body>
</html>
";
        
        $__internal_26455bbac88fb333dfdb44496bb889810eece0b8ca44557dec008be018095d3e->leave($__internal_26455bbac88fb333dfdb44496bb889810eece0b8ca44557dec008be018095d3e_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d16fe1df094095d187bcb2571d3f2414a3eca0ded29d441ee6a9377965b35165 = $this->env->getExtension("native_profiler");
        $__internal_d16fe1df094095d187bcb2571d3f2414a3eca0ded29d441ee6a9377965b35165->enter($__internal_d16fe1df094095d187bcb2571d3f2414a3eca0ded29d441ee6a9377965b35165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome! Bootstrap 101 Template";
        
        $__internal_d16fe1df094095d187bcb2571d3f2414a3eca0ded29d441ee6a9377965b35165->leave($__internal_d16fe1df094095d187bcb2571d3f2414a3eca0ded29d441ee6a9377965b35165_prof);

    }

    // line 30
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f561522cf6a280db8738f3fbfe6afb4c6eff77773b78b871a95db0968131c27 = $this->env->getExtension("native_profiler");
        $__internal_5f561522cf6a280db8738f3fbfe6afb4c6eff77773b78b871a95db0968131c27->enter($__internal_5f561522cf6a280db8738f3fbfe6afb4c6eff77773b78b871a95db0968131c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_5f561522cf6a280db8738f3fbfe6afb4c6eff77773b78b871a95db0968131c27->leave($__internal_5f561522cf6a280db8738f3fbfe6afb4c6eff77773b78b871a95db0968131c27_prof);

    }

    // line 73
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1add9c59da687c734ddebd987311f99616a55748360f1b58674bfb70e61c47ff = $this->env->getExtension("native_profiler");
        $__internal_1add9c59da687c734ddebd987311f99616a55748360f1b58674bfb70e61c47ff->enter($__internal_1add9c59da687c734ddebd987311f99616a55748360f1b58674bfb70e61c47ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_1add9c59da687c734ddebd987311f99616a55748360f1b58674bfb70e61c47ff->leave($__internal_1add9c59da687c734ddebd987311f99616a55748360f1b58674bfb70e61c47ff_prof);

    }

    // line 74
    public function block_body($context, array $blocks = array())
    {
        $__internal_05e1ce8cbc4006b4558f2a01f781c0ed68aac64fcc483566cd31868ff2cfbeff = $this->env->getExtension("native_profiler");
        $__internal_05e1ce8cbc4006b4558f2a01f781c0ed68aac64fcc483566cd31868ff2cfbeff->enter($__internal_05e1ce8cbc4006b4558f2a01f781c0ed68aac64fcc483566cd31868ff2cfbeff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_05e1ce8cbc4006b4558f2a01f781c0ed68aac64fcc483566cd31868ff2cfbeff->leave($__internal_05e1ce8cbc4006b4558f2a01f781c0ed68aac64fcc483566cd31868ff2cfbeff_prof);

    }

    // line 75
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f5e285af22018bfb4399ea5a13cde517bbc681108b33e2df824b3b9101a3290b = $this->env->getExtension("native_profiler");
        $__internal_f5e285af22018bfb4399ea5a13cde517bbc681108b33e2df824b3b9101a3290b->enter($__internal_f5e285af22018bfb4399ea5a13cde517bbc681108b33e2df824b3b9101a3290b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 76
        echo "<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/store/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f5e285af22018bfb4399ea5a13cde517bbc681108b33e2df824b3b9101a3290b->leave($__internal_f5e285af22018bfb4399ea5a13cde517bbc681108b33e2df824b3b9101a3290b_prof);

    }

    public function getTemplateName()
    {
        return "@Store/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 79,  208 => 76,  202 => 75,  191 => 74,  180 => 73,  169 => 30,  157 => 8,  148 => 81,  146 => 75,  144 => 74,  142 => 73,  134 => 67,  127 => 63,  120 => 59,  115 => 57,  112 => 56,  110 => 55,  107 => 54,  103 => 52,  99 => 50,  97 => 49,  89 => 44,  72 => 31,  70 => 30,  55 => 18,  47 => 13,  42 => 11,  36 => 8,  27 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <title>{% block title %}Welcome! Bootstrap 101 Template{% endblock %}</title>*/
/* */
/*     <!-- Bootstrap core CSS -->*/
/*     <link href="{{ asset('bundles/store/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <!-- Bootstrap theme -->*/
/*     <link href="{{ asset('bundles/store/css/bootstrap-theme.min.css') }}" rel="stylesheet">*/
/*     <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->*/
/*     <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">*/
/* */
/*     <!-- Custom styles for this template -->*/
/*     <link href="{{ asset('bundles/store/css/theme.css') }}" rel="stylesheet">*/
/* */
/*     <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->*/
/*     <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->*/
/*     <script src="../../assets/js/ie-emulation-modes-warning.js"></script>*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*     <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/* */
/*     {% block stylesheets %}{% endblock %}*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/* </head>*/
/* <body role="document">*/
/* <!-- Fixed navbar -->*/
/* <nav class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="container">*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ path('store_default_bootstrap') }}">Bootstrap theme</a>*/
/*         </div>*/
/*         <div id="navbar" class="navbar-collapse collapse">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li class="active"><a href="/">Home</a></li>*/
/*                 {% if app.user %}*/
/*                     <li><a href="/logout">logoff</a></li>*/
/*                 {% else %}*/
/*                     <li><a href="/login">login</a></li>*/
/*                 {% endif %}*/
/*                 <li><a href="#contact">Contact</a></li>*/
/*                 {% if is_granted("ROLE_ADMIN") %}*/
/*                     <li class="dropdown">*/
/*                         <a href="{{ path('articles_index') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Beheer <span class="caret"></span></a>*/
/*                         <ul class="dropdown-menu">*/
/*                              <li><a href="{{ path('articles_new') }}">new</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <!-- <li class="dropdown-header">Nav header</li>*/
/*                             <li><a href="#">Separated link</a></li-->*/
/*                             <li><a href="{{ path('articles_index') }}">Article list</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 {% endif %}*/
/*             </ul>*/
/*         </div><!--/.nav-collapse -->*/
/*     </div>*/
/* </nav>*/
/* */
/* <div class="container theme-showcase" role="main">*/
/*     {% block fos_user_content %}{% endblock %}*/
/* {% block body %}{% endblock %}*/
/* {% block javascripts %}*/
/* <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->*/
/* <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>*/
/* <!-- Include all compiled plugins (below), or include individual files as needed -->*/
/* <script src="{{ asset('bundles/store/js/bootstrap.min.js') }}"></script>*/
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
