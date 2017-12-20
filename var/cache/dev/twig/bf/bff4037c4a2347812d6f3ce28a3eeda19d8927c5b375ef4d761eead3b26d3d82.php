<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_99c783a1e9012162a0c4fab1dd51d7d7ee3e8495080c0ba8ba0f742f7f311aa6 extends Twig_Template
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
        $__internal_2cd06753fb9585ccbbf138987f447fdfeceb4909cadc060df6a8eeedd04f9b03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cd06753fb9585ccbbf138987f447fdfeceb4909cadc060df6a8eeedd04f9b03->enter($__internal_2cd06753fb9585ccbbf138987f447fdfeceb4909cadc060df6a8eeedd04f9b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_e421d43c3f6d6b5bc544ef81395478aaa6819eef0e7547da5a03d64870baaadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e421d43c3f6d6b5bc544ef81395478aaa6819eef0e7547da5a03d64870baaadc->enter($__internal_e421d43c3f6d6b5bc544ef81395478aaa6819eef0e7547da5a03d64870baaadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_2cd06753fb9585ccbbf138987f447fdfeceb4909cadc060df6a8eeedd04f9b03->leave($__internal_2cd06753fb9585ccbbf138987f447fdfeceb4909cadc060df6a8eeedd04f9b03_prof);

        
        $__internal_e421d43c3f6d6b5bc544ef81395478aaa6819eef0e7547da5a03d64870baaadc->leave($__internal_e421d43c3f6d6b5bc544ef81395478aaa6819eef0e7547da5a03d64870baaadc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/var/www/html/Projet-Symfony-master/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
