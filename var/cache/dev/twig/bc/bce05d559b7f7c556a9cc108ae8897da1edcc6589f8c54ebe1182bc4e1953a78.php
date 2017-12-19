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
        $__internal_f9a037ed0ffe70a6f08ddbc288567c665e455c07d8f5a01e2c39845d607033b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9a037ed0ffe70a6f08ddbc288567c665e455c07d8f5a01e2c39845d607033b0->enter($__internal_f9a037ed0ffe70a6f08ddbc288567c665e455c07d8f5a01e2c39845d607033b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_55be6a7f919c332a3bd73974434a61d940edd96190c380c7ca38422cdae17871 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55be6a7f919c332a3bd73974434a61d940edd96190c380c7ca38422cdae17871->enter($__internal_55be6a7f919c332a3bd73974434a61d940edd96190c380c7ca38422cdae17871_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_f9a037ed0ffe70a6f08ddbc288567c665e455c07d8f5a01e2c39845d607033b0->leave($__internal_f9a037ed0ffe70a6f08ddbc288567c665e455c07d8f5a01e2c39845d607033b0_prof);

        
        $__internal_55be6a7f919c332a3bd73974434a61d940edd96190c380c7ca38422cdae17871->leave($__internal_55be6a7f919c332a3bd73974434a61d940edd96190c380c7ca38422cdae17871_prof);

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
