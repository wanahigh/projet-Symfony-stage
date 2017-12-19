<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_c09c65e749ddb5e5503aa8ace49b9c164a1635795f580df8248d2740dab027df extends Twig_Template
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
        $__internal_e2be25027b72a5daa9085a16af4bda3d83d7f2fd088c962ce13a37a2517beec6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2be25027b72a5daa9085a16af4bda3d83d7f2fd088c962ce13a37a2517beec6->enter($__internal_e2be25027b72a5daa9085a16af4bda3d83d7f2fd088c962ce13a37a2517beec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_a5424ae14a9bd1ebb33e32d4872db63d19f11f0de3ecba928c879cde57d84b33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5424ae14a9bd1ebb33e32d4872db63d19f11f0de3ecba928c879cde57d84b33->enter($__internal_a5424ae14a9bd1ebb33e32d4872db63d19f11f0de3ecba928c879cde57d84b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e2be25027b72a5daa9085a16af4bda3d83d7f2fd088c962ce13a37a2517beec6->leave($__internal_e2be25027b72a5daa9085a16af4bda3d83d7f2fd088c962ce13a37a2517beec6_prof);

        
        $__internal_a5424ae14a9bd1ebb33e32d4872db63d19f11f0de3ecba928c879cde57d84b33->leave($__internal_a5424ae14a9bd1ebb33e32d4872db63d19f11f0de3ecba928c879cde57d84b33_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
