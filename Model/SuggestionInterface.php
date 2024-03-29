<?php

declare(strict_types=1);

namespace Owl\Component\Suggestion\Model;

use Sylius\Component\Resource\Model\ResourceInterface;
use Sylius\Component\Resource\Model\TimestampableInterface;

interface SuggestionInterface extends TimestampableInterface, ResourceInterface
{
    public function getTitle(): ?string;

    public function setTitle(?string $title): void;

    public function getDescription(): ?string;

    public function setDescription(?string $description): void;
}
