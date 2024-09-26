<?php

declare(strict_types=1);

namespace Tests\Unit;

use Generator;
use Ghostwriter\GitHubFlavoredMarkdown\Foo;
use Ghostwriter\GitHubFlavoredMarkdown\Interface\FooExceptionInterface;
use Ghostwriter\GitHubFlavoredMarkdown\Interface\FooInterface;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Throwable;

#[CoversClass(Foo::class)]
final class FooTest extends TestCase
{
    /**
     * @throws Throwable
     */
    #[DataProvider('dataProvider')]
    public function testExample(bool $value): void
    {
        self::assertSame($value, $value);

        self::assertTrue(Foo::new()->test());
    }

    /**
     * @throws Throwable
     */
    public function testImplementsInterface(): void
    {
        self::assertTrue(\is_a(Foo::class, FooInterface::class, true));
        self::assertTrue(\is_a(FooExceptionInterface::class, Throwable::class, true));
    }

    /**
     * @return Generator<array{bool}>
     */
    public static function dataProvider(): Generator
    {
        yield from [
            'true' => [true],
            'false' => [false],
        ];
    }
}
