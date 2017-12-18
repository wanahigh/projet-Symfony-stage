<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_eebf265b945351ff1ae5e8fbf136104642ccdcfb0407c89cb770a87f07478daf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08b634bd942650193187ad4e13ac44686719dca74896c65df4d2bc168638a354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08b634bd942650193187ad4e13ac44686719dca74896c65df4d2bc168638a354->enter($__internal_08b634bd942650193187ad4e13ac44686719dca74896c65df4d2bc168638a354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_0ef7932b87957a9462d92d92bf36d3b18fd957863d193a1e0cf1250406ce7f3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef7932b87957a9462d92d92bf36d3b18fd957863d193a1e0cf1250406ce7f3c->enter($__internal_0ef7932b87957a9462d92d92bf36d3b18fd957863d193a1e0cf1250406ce7f3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_08b634bd942650193187ad4e13ac44686719dca74896c65df4d2bc168638a354->leave($__internal_08b634bd942650193187ad4e13ac44686719dca74896c65df4d2bc168638a354_prof);

        
        $__internal_0ef7932b87957a9462d92d92bf36d3b18fd957863d193a1e0cf1250406ce7f3c->leave($__internal_0ef7932b87957a9462d92d92bf36d3b18fd957863d193a1e0cf1250406ce7f3c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
