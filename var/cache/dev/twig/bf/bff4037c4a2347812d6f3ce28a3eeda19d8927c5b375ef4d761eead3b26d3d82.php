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
        $__internal_c40e915ee3f59e4f4222afa141c04bed0ef975de9c6b182e30aae92c792dcf33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c40e915ee3f59e4f4222afa141c04bed0ef975de9c6b182e30aae92c792dcf33->enter($__internal_c40e915ee3f59e4f4222afa141c04bed0ef975de9c6b182e30aae92c792dcf33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_23acb0567d513faa092f2abff99be7f20fb819aeefb33d5e0a8def12dcd417a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23acb0567d513faa092f2abff99be7f20fb819aeefb33d5e0a8def12dcd417a2->enter($__internal_23acb0567d513faa092f2abff99be7f20fb819aeefb33d5e0a8def12dcd417a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

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
        
        $__internal_c40e915ee3f59e4f4222afa141c04bed0ef975de9c6b182e30aae92c792dcf33->leave($__internal_c40e915ee3f59e4f4222afa141c04bed0ef975de9c6b182e30aae92c792dcf33_prof);

        
        $__internal_23acb0567d513faa092f2abff99be7f20fb819aeefb33d5e0a8def12dcd417a2->leave($__internal_23acb0567d513faa092f2abff99be7f20fb819aeefb33d5e0a8def12dcd417a2_prof);

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
