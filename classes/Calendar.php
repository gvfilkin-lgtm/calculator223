<?php

declare(strict_types=1);

namespace Calculator223\Classes;

use DateInterval;
use DateTime;

class Calendar
{
    /**
     * Праздничные дни.
     */
    private array $holidays = [];

    /**
     * Рабочие переносы.
     */
    private array $workDays = [];

    public function __construct()
    {
        $this->loadCalendar();
    }

    /**
     * Загрузка производственного календаря.
     */
    private function loadCalendar(): void
    {
        $this->holidays = [];

        $this->workDays = [];
    }

    /**
     * Проверка выходного.
     */
    public function isWeekend(DateTime $date): bool
    {
        return in_array(
            (int)$date->format('N'),
            [6,7],
            true
        );
    }

    /**
     * Проверка праздника.
     */
    public function isHoliday(DateTime $date): bool
    {
        return in_array(
            $date->format('Y-m-d'),
            $this->holidays,
            true
        );
    }

    /**
     * Проверка рабочего дня.
     */
    public function isWorkingDay(DateTime $date): bool
    {
        $day = $date->format('Y-m-d');

        if (in_array($day,$this->workDays,true)) {
            return true;
        }

        if ($this->isWeekend($date)) {
            return false;
        }

        if ($this->isHoliday($date)) {
            return false;
        }

        return true;
    }

    /**
     * Следующий рабочий день.
     */
    public function nextWorkingDay(DateTime $date): DateTime
    {
        $newDate = clone $date;

        while (!$this->isWorkingDay($newDate)) {

            $newDate->add(
                new DateInterval('P1D')
            );

        }

        return $newDate;
    }

    /**
     * Добавить рабочие дни.
     */
    public function addWorkingDays(
        DateTime $date,
        int $days
    ): DateTime
    {

        $newDate = clone $date;

        while ($days > 0) {

            $newDate->add(
                new DateInterval('P1D')
            );

            if ($this->isWorkingDay($newDate)) {

                $days--;

            }

        }

        return $newDate;

    }

}
