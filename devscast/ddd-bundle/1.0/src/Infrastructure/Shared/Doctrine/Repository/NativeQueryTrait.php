<?php

declare(strict_types=1);

namespace Infrastructure\Shared\Doctrine\Repository;

use DateTimeImmutable;

/**
 * Trait NativeQueryTrait.
 *
 * @author bernard-ng <bernard@devscast.tech>
 */
trait NativeQueryTrait
{
    public function execute(string $sql, array $data = [], bool $fetchAll = true, int $fetchMode = \PDO::FETCH_ASSOC): array
    {
        try {
            $connection = $this->getEntityManager()->getConnection();
            $statement = $connection->prepare($sql);
            $result = $statement->executeQuery($data);

            if ($fetchAll && \PDO::FETCH_ASSOC === $fetchMode) {
                return $result->fetchAllAssociative();
            }

            $data = match ($fetchMode) {
                \PDO::FETCH_ASSOC => $result->fetchAssociative(),
                \PDO::FETCH_COLUMN => $result->fetchFirstColumn(),
                \PDO::FETCH_NUM => $result->fetchNumeric()
            };

            return false === $data ? [] : $data;
        } catch (\Throwable $e) {
            if ('dev' === $_ENV['APP_ENV']) {
                dd($e);
            }

            return [];
        }
    }

    private function calculateProgressionRatio(float|int $previous, float|int $current): int|float
    {
        return 0.0 === $previous || 0 === $previous ?
            $current * 100 :
            round(($current - $previous) * ($previous / 100), 2);
    }

    private function createDateTimeInterval(string $start, string $end): array
    {
        try {
            return [
                (new DateTimeImmutable($start))->format('Y-m-d'),
                (new DateTimeImmutable($end))->format('Y-m-d'),
            ];
        } catch (\Throwable) {
            return [];
        }
    }

    private function createMonthSumSQL(string $date): string
    {
        return <<< SQL
            SUM(MONTH({$date}) = 1) AS 'Jan',
            SUM(MONTH({$date}) = 2) AS 'Feb',
            SUM(MONTH({$date}) = 3) AS 'Mar',
            SUM(MONTH({$date}) = 4) AS 'Apr',
            SUM(MONTH({$date}) = 5) AS 'May',
            SUM(MONTH({$date}) = 6) AS 'Jun',
            SUM(MONTH({$date}) = 7) AS 'Jul',
            SUM(MONTH({$date}) = 8) AS 'Aug',
            SUM(MONTH({$date}) = 9) AS 'Sep',
            SUM(MONTH({$date}) = 10) AS 'Oct',
            SUM(MONTH({$date}) = 11) AS 'Nov',
            SUM(MONTH({$date}) = 12) AS 'Dec'
        SQL;
    }
}
