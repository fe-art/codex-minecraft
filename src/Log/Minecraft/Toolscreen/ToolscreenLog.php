<?php

namespace Aternos\Codex\Minecraft\Log\Minecraft\Toolscreen;

use Aternos\Codex\Detective\SinglePatternDetector;
use Aternos\Codex\Minecraft\Log\Minecraft\MinecraftLog;
use Aternos\Codex\Minecraft\Parser\Parser;

abstract class ToolscreenLog extends MinecraftLog
{
    /**
     * @return Parser
     */
    public static function getDefaultParser(): Parser
    {
        return (new Parser())->setPattern('/^.*$/');
    }

    /**
     * @inheritDoc
     */
    public static function getDetectors(): array
    {
        return [(new SinglePatternDetector())->setPattern("/^Toolscreen log session\r?$/m")];
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return "Toolscreen";
    }
}
