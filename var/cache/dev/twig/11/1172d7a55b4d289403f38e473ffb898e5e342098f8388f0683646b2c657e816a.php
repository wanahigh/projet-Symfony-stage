<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_a1dfef49ced178fcd7e9b20802ae33ed2e9761120896d10fb98487532b2e7ce4 extends Twig_Template
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
        $__internal_df8db11dc2cf73b6eff905b083444fb54e779a08590beedcb2bb47e209b9f0d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df8db11dc2cf73b6eff905b083444fb54e779a08590beedcb2bb47e209b9f0d4->enter($__internal_df8db11dc2cf73b6eff905b083444fb54e779a08590beedcb2bb47e209b9f0d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_12ea616fdfd64f4d6b69817e4d21ea5ab83fdcfd516f6e547adb243e4a2ac520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ea616fdfd64f4d6b69817e4d21ea5ab83fdcfd516f6e547adb243e4a2ac520->enter($__internal_12ea616fdfd64f4d6b69817e4d21ea5ab83fdcfd516f6e547adb243e4a2ac520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_df8db11dc2cf73b6eff905b083444fb54e779a08590beedcb2bb47e209b9f0d4->leave($__internal_df8db11dc2cf73b6eff905b083444fb54e779a08590beedcb2bb47e209b9f0d4_prof);

        
        $__internal_12ea616fdfd64f4d6b69817e4d21ea5ab83fdcfd516f6e547adb243e4a2ac520->leave($__internal_12ea616fdfd64f4d6b69817e4d21ea5ab83fdcfd516f6e547adb243e4a2ac520_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
