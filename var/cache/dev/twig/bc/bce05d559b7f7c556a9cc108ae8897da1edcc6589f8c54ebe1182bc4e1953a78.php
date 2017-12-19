<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_8684aea78695ed7905dc261447fb0273cf95d756a5786fb3ac7d5aafaad9a840 extends Twig_Template
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
        $__internal_9e456c95cdafe0f3049ba827cbecf14b42ced6ba00f47a5c02aab05b96c97358 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e456c95cdafe0f3049ba827cbecf14b42ced6ba00f47a5c02aab05b96c97358->enter($__internal_9e456c95cdafe0f3049ba827cbecf14b42ced6ba00f47a5c02aab05b96c97358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_2ba0cddde8589c568c5348f4a97251fd64a819479faecf4b1205526c1e2da8c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba0cddde8589c568c5348f4a97251fd64a819479faecf4b1205526c1e2da8c9->enter($__internal_2ba0cddde8589c568c5348f4a97251fd64a819479faecf4b1205526c1e2da8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_9e456c95cdafe0f3049ba827cbecf14b42ced6ba00f47a5c02aab05b96c97358->leave($__internal_9e456c95cdafe0f3049ba827cbecf14b42ced6ba00f47a5c02aab05b96c97358_prof);

        
        $__internal_2ba0cddde8589c568c5348f4a97251fd64a819479faecf4b1205526c1e2da8c9->leave($__internal_2ba0cddde8589c568c5348f4a97251fd64a819479faecf4b1205526c1e2da8c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
