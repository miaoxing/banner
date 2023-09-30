<?php

namespace Miaoxing\Banner\Service;

class BannerCategoryModel
{
    /**
     * Returns the success result with model data
     *
     * @param array|string|BaseResource|mixed $merge
     * @return Ret
     * @see BannerCategoryModel::toRet
     */
    public static function toRet($merge = []): \Wei\Ret
    {
    }

    /**
     * Set each attribute value, without checking whether the column is fillable, and save the model
     *
     * @param iterable $attributes
     * @return $this
     * @see BannerCategoryModel::saveAttributes
     */
    public static function saveAttributes(iterable $attributes = []): self
    {
    }

    /**
     * Returns the record data as array
     *
     * @param array|callable $returnFields A indexed array specified the fields to return
     * @param callable|null $prepend
     * @return array
     * @see BannerCategoryModel::toArray
     */
    public static function toArray($returnFields = [], callable $prepend = null): array
    {
    }

    /**
     * Return the record table name
     *
     * @return string
     * @see BannerCategoryModel::getTable
     */
    public static function getTable(): string
    {
    }

    /**
     * Import a PHP array in this record
     *
     * @param iterable $array
     * @return $this
     * @see BannerCategoryModel::fromArray
     */
    public static function fromArray(iterable $array): self
    {
    }

    /**
     * Save the record or data to database
     *
     * @param iterable $attributes
     * @return $this
     * @see BannerCategoryModel::save
     */
    public static function save(iterable $attributes = []): self
    {
    }

    /**
     * Delete the current record and trigger the beforeDestroy and afterDestroy callback
     *
     * @param int|string $id
     * @return $this
     * @see BannerCategoryModel::destroy
     */
    public static function destroy($id = null): self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
     *
     * @param string|int $id
     * @return $this
     * @throws \Exception when record not found
     * @see BannerCategoryModel::destroyOrFail
     */
    public static function destroyOrFail($id): self
    {
    }

    /**
     * Set the record field value
     *
     * @param string|int|null $name
     * @param mixed $value
     * @param bool $throwException
     * @return $this|false
     * @see BannerCategoryModel::set
     */
    public static function set($name, $value, bool $throwException = true)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or false
     *
     * @param int|string|array|null $id
     * @return $this|null
     * @see BannerCategoryModel::find
     */
    public static function find($id): ?self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found
     *
     * @param int|string $id
     * @return $this
     * @throws \Exception
     * @see BannerCategoryModel::findOrFail
     */
    public static function findOrFail($id): self
    {
    }

    /**
     * Find a record by primary key, or init with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array|object $attributes
     * @return $this
     * @see BannerCategoryModel::findOrInit
     */
    public static function findOrInit($id = null, $attributes = []): self
    {
    }

    /**
     * Find a record by primary key, or save with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array $attributes
     * @return $this
     * @see BannerCategoryModel::findOrCreate
     */
    public static function findOrCreate($id, $attributes = []): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see BannerCategoryModel::findByOrCreate
     */
    public static function findByOrCreate($attributes, $data = []): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record collection object or false
     *
     * @param array $ids
     * @return $this|$this[]
     * @phpstan-return $this
     * @see BannerCategoryModel::findAll
     */
    public static function findAll(array $ids): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|null
     * @see BannerCategoryModel::findBy
     */
    public static function findBy($column, $operator = null, $value = null): ?self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|$this[]
     * @phpstan-return $this
     * @see BannerCategoryModel::findAllBy
     */
    public static function findAllBy($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see BannerCategoryModel::findOrInitBy
     */
    public static function findOrInitBy(array $attributes = [], $data = []): self
    {
    }

    /**
     * Find a record by primary key value and throws 404 exception if record not found
     *
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @throws \Exception
     * @see BannerCategoryModel::findByOrFail
     */
    public static function findByOrFail($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param Req|null $req
     * @return $this
     * @throws \Exception
     * @see BannerCategoryModel::findFromReq
     */
    public static function findFromReq(\Wei\Req $req = null): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or null if not found
     *
     * @return $this|null
     * @see BannerCategoryModel::first
     */
    public static function first(): ?self
    {
    }

    /**
     * @return $this|$this[]
     * @phpstan-return $this
     * @see BannerCategoryModel::all
     */
    public static function all(): self
    {
    }

    /**
     * Coll: Specifies a field to be the key of the fetched array
     *
     * @param string $column
     * @return $this
     * @see BannerCategoryModel::indexBy
     */
    public static function indexBy(string $column): self
    {
    }

    /**
     * Execute a update query with specified data
     *
     * @param array|string $set
     * @param mixed $value
     * @return int
     * @see BannerCategoryModel::update
     */
    public static function update($set = [], $value = null): int
    {
    }

    /**
     * @param array|string|true $scopes
     * @return $this
     * @see BannerCategoryModel::unscoped
     */
    public static function unscoped($scopes = []): self
    {
    }

    /**
     * Set or remove cache time for the query
     *
     * @param int|null $seconds
     * @return $this
     * @see BannerCategoryModel::setCacheTime
     */
    public static function setCacheTime(?int $seconds): self
    {
    }

    /**
     * Returns the name of columns of current table
     *
     * @return array
     * @see BannerCategoryModel::getColumns
     */
    public static function getColumns(): array
    {
    }

    /**
     * Check if column name exists
     *
     * @param string|int|null $name
     * @return bool
     * @see BannerCategoryModel::hasColumn
     */
    public static function hasColumn($name): bool
    {
    }

    /**
     * Executes the generated query and returns the first array result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array|null
     * @see BannerCategoryModel::fetch
     */
    public static function fetch($column = null, $operator = null, $value = null): ?array
    {
    }

    /**
     * Executes the generated query and returns all array results
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array
     * @see BannerCategoryModel::fetchAll
     */
    public static function fetchAll($column = null, $operator = null, $value = null): array
    {
    }

    /**
     * Check if the query has result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return bool
     * @see BannerCategoryModel::exists
     */
    public static function exists($column = null, $operator = null, $value = null): bool
    {
    }

    /**
     * @param string $column
     * @param string|null $index
     * @return array
     * @see BannerCategoryModel::pluck
     */
    public static function pluck(string $column, string $index = null): array
    {
    }

    /**
     * @param int $count
     * @param callable $callback
     * @return bool
     * @see BannerCategoryModel::chunk
     */
    public static function chunk(int $count, callable $callback): bool
    {
    }

    /**
     * Executes a COUNT query to receive the rows number
     *
     * @param string $column
     * @return int
     * @see BannerCategoryModel::cnt
     */
    public static function cnt($column = '*'): int
    {
    }

    /**
     * Executes a MAX query to receive the max value of column
     *
     * @param string $column
     * @return string|null
     * @see BannerCategoryModel::max
     */
    public static function max(string $column): ?string
    {
    }

    /**
     * Execute a delete query with specified conditions
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return int
     * @see BannerCategoryModel::delete
     */
    public static function delete($column = null, $operator = null, $value = null): int
    {
    }

    /**
     * Sets the position of the first result to retrieve (the "offset")
     *
     * @param int|float|string $offset The first result to return
     * @return $this
     * @see BannerCategoryModel::offset
     */
    public static function offset($offset): self
    {
    }

    /**
     * Sets the maximum number of results to retrieve (the "limit")
     *
     * @param int|float|string $limit The maximum number of results to retrieve
     * @return $this
     * @see BannerCategoryModel::limit
     */
    public static function limit($limit): self
    {
    }

    /**
     * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
     *
     * @param int $page The page number
     * @return $this
     * @see BannerCategoryModel::page
     */
    public static function page($page): self
    {
    }

    /**
     * Specifies an item that is to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns the selection expressions
     * @return $this
     * @see BannerCategoryModel::select
     */
    public static function select($columns = ['*']): self
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see BannerCategoryModel::selectDistinct
     */
    public static function selectDistinct($columns): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see BannerCategoryModel::selectRaw
     */
    public static function selectRaw($expression): self
    {
    }

    /**
     * Specifies columns that are not to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns
     * @return $this
     * @see BannerCategoryModel::selectExcept
     */
    public static function selectExcept($columns): self
    {
    }

    /**
     * Specifies an item of the main table that is to be returned in the query result.
     * Default to all columns of the main table
     *
     * @param string $column
     * @return $this
     * @see BannerCategoryModel::selectMain
     */
    public static function selectMain(string $column = '*'): self
    {
    }

    /**
     * Sets table for FROM query
     *
     * @param string $table
     * @param string|null $alias
     * @return $this
     * @see BannerCategoryModel::from
     */
    public static function from(string $table, $alias = null): self
    {
    }

    /**
     * @param string $table
     * @param mixed|null $alias
     * @return $this
     * @see BannerCategoryModel::table
     */
    public static function table(string $table, $alias = null): self
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @param string $type
     * @return $this
     * @see BannerCategoryModel::join
     */
    public static function join(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null,
        string $type = 'INNER'
    ): self {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see BannerCategoryModel::innerJoin
     */
    public static function innerJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a left join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see BannerCategoryModel::leftJoin
     */
    public static function leftJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a right join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see BannerCategoryModel::rightJoin
     */
    public static function rightJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Specifies one or more restrictions to the query result.
     * Replaces any previously specified restrictions, if any.
     *
     * ```php
     * $user = QueryBuilder::table('user')->where('id', 1);
     * $users = QueryBuilder::table('user')->where('id', '>', 1);
     * $users = QueryBuilder::table('user')->where(['id' => '1', 'username' => 'twin']);
     * $users = QueryBuilder::table('user')->where(['id' => ['1', '2', '3']]);
     * ```
     *
     * @param array|Closure|string|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @see BannerCategoryModel::where
     */
    public static function where($column = null, $operator = null, $value = null): self
    {
    }

    /**
     * @param string $expression
     * @param mixed $params
     * @return $this
     * @see BannerCategoryModel::whereRaw
     */
    public static function whereRaw($expression, $params = null): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed $value
     * @return $this
     * @see BannerCategoryModel::whereNot
     */
    public static function whereNot($column, $value): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see BannerCategoryModel::whereBetween
     */
    public static function whereBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see BannerCategoryModel::whereNotBetween
     */
    public static function whereNotBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see BannerCategoryModel::whereIn
     */
    public static function whereIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see BannerCategoryModel::whereNotIn
     */
    public static function whereNotIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see BannerCategoryModel::whereNull
     */
    public static function whereNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see BannerCategoryModel::whereNotNull
     */
    public static function whereNotNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see BannerCategoryModel::whereDate
     */
    public static function whereDate(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see BannerCategoryModel::whereMonth
     */
    public static function whereMonth(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see BannerCategoryModel::whereDay
     */
    public static function whereDay(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see BannerCategoryModel::whereYear
     */
    public static function whereYear(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see BannerCategoryModel::whereTime
     */
    public static function whereTime(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrColumn2
     * @param mixed|null $column2
     * @return $this
     * @see BannerCategoryModel::whereColumn
     */
    public static function whereColumn(string $column, $opOrColumn2, $column2 = null): self
    {
    }

    /**
     * 搜索字段是否包含某个值
     *
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see BannerCategoryModel::whereContains
     */
    public static function whereContains(string $column, $value, string $condition = 'AND'): self
    {
    }

    /**
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see BannerCategoryModel::whereNotContains
     */
    public static function whereNotContains(string $column, $value, string $condition = 'OR'): self
    {
    }

    /**
     * Search whether a column has a value other than the default value
     *
     * @param string $column
     * @param bool $has
     * @return $this
     * @see BannerCategoryModel::whereHas
     */
    public static function whereHas(string $column, bool $has = true): self
    {
    }

    /**
     * @param mixed $if
     * @param mixed ...$args
     * @return $this
     * @see BannerCategoryModel::whereIf
     */
    public static function whereIf($if, ...$args): self
    {
    }

    /**
     * Search whether a column dont have a value other than the default value
     *
     * @param string $column
     * @return $this
     * @see BannerCategoryModel::whereNotHas
     */
    public static function whereNotHas(string $column): self
    {
    }

    /**
     * Specifies a grouping over the results of the query.
     * Replaces any previously specified groupings, if any.
     *
     * @param mixed $column the grouping column
     * @return $this
     * @see BannerCategoryModel::groupBy
     */
    public static function groupBy($column): self
    {
    }

    /**
     * Specifies a restriction over the groups of the query.
     * Replaces any previous having restrictions, if any.
     *
     * @param mixed $column
     * @param mixed $operator
     * @param mixed|null $value
     * @param mixed $condition
     * @return $this
     * @see BannerCategoryModel::having
     */
    public static function having($column, $operator, $value = null, $condition = 'AND'): self
    {
    }

    /**
     * Specifies an ordering for the query results.
     * Replaces any previously specified orderings, if any.
     *
     * @param string|Raw $column the ordering expression
     * @param string $order the ordering direction
     * @return $this
     * @see BannerCategoryModel::orderBy
     */
    public static function orderBy($column, $order = 'ASC'): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see BannerCategoryModel::orderByRaw
     */
    public static function orderByRaw($expression): self
    {
    }

    /**
     * Adds a DESC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see BannerCategoryModel::desc
     */
    public static function desc(string $field): self
    {
    }

    /**
     * Add an ASC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see BannerCategoryModel::asc
     */
    public static function asc(string $field): self
    {
    }

    /**
     * @return $this
     * @see BannerCategoryModel::forUpdate
     */
    public static function forUpdate(): self
    {
    }

    /**
     * @return $this
     * @see BannerCategoryModel::forShare
     */
    public static function forShare(): self
    {
    }

    /**
     * @param string|bool $lock
     * @return $this
     * @see BannerCategoryModel::lock
     */
    public static function lock($lock): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see BannerCategoryModel::when
     */
    public static function when($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see BannerCategoryModel::unless
     */
    public static function unless($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see BannerCategoryModel::setDbKeyConverter
     */
    public static function setDbKeyConverter(callable $converter = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see BannerCategoryModel::setPhpKeyConverter
     */
    public static function setPhpKeyConverter(callable $converter = null): self
    {
    }

    /**
     * Add a (inner) join base on the relation to the query
     *
     * @param string|array $name
     * @param string $type
     * @return $this
     * @see BannerCategoryModel::joinRelation
     */
    public static function joinRelation($name, string $type = 'INNER'): self
    {
    }

    /**
     * Add a inner join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see BannerCategoryModel::innerJoinRelation
     */
    public static function innerJoinRelation($name): self
    {
    }

    /**
     * Add a left join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see BannerCategoryModel::leftJoinRelation
     */
    public static function leftJoinRelation($name): self
    {
    }

    /**
     * Add a right join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see BannerCategoryModel::rightJoinRelation
     */
    public static function rightJoinRelation($name): self
    {
    }

    /**
     * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
     *
     * This method only checks whether the specified method has the "Relation" attribute,
     * and does not check the actual logic.
     * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
     *
     * @param string $method
     * @return bool
     * @see BannerCategoryModel::isRelation
     */
    public static function isRelation(string $method): bool
    {
    }

    /**
     * Really remove the record from database
     *
     * @param int|string $id
     * @return $this
     * @see BannerCategoryModel::reallyDestroy
     */
    public static function reallyDestroy($id = null): self
    {
    }

    /**
     * Add a query to filter soft deleted records
     *
     * @return $this
     * @see BannerCategoryModel::withoutDeleted
     */
    public static function withoutDeleted(): self
    {
    }

    /**
     * Add a query to return only deleted records
     *
     * @return $this
     * @see BannerCategoryModel::onlyDeleted
     */
    public static function onlyDeleted(): self
    {
    }

    /**
     * Remove "withoutDeleted" in the query, expect to return all records
     *
     * @return $this
     * @see BannerCategoryModel::withDeleted
     */
    public static function withDeleted(): self
    {
    }

    /**
     * Add a query to return only purged records
     *
     * @return $this
     * @see BannerCategoryModel::onlyPurged
     */
    public static function onlyPurged(): self
    {
    }
}

class BannerModel
{
    /**
     * Returns the success result with model data
     *
     * @param array|string|BaseResource|mixed $merge
     * @return Ret
     * @see BannerModel::toRet
     */
    public static function toRet($merge = []): \Wei\Ret
    {
    }

    /**
     * Set each attribute value, without checking whether the column is fillable, and save the model
     *
     * @param iterable $attributes
     * @return $this
     * @see BannerModel::saveAttributes
     */
    public static function saveAttributes(iterable $attributes = []): self
    {
    }

    /**
     * Returns the record data as array
     *
     * @param array|callable $returnFields A indexed array specified the fields to return
     * @param callable|null $prepend
     * @return array
     * @see BannerModel::toArray
     */
    public static function toArray($returnFields = [], callable $prepend = null): array
    {
    }

    /**
     * Return the record table name
     *
     * @return string
     * @see BannerModel::getTable
     */
    public static function getTable(): string
    {
    }

    /**
     * Import a PHP array in this record
     *
     * @param iterable $array
     * @return $this
     * @see BannerModel::fromArray
     */
    public static function fromArray(iterable $array): self
    {
    }

    /**
     * Save the record or data to database
     *
     * @param iterable $attributes
     * @return $this
     * @see BannerModel::save
     */
    public static function save(iterable $attributes = []): self
    {
    }

    /**
     * Delete the current record and trigger the beforeDestroy and afterDestroy callback
     *
     * @param int|string $id
     * @return $this
     * @see BannerModel::destroy
     */
    public static function destroy($id = null): self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
     *
     * @param string|int $id
     * @return $this
     * @throws \Exception when record not found
     * @see BannerModel::destroyOrFail
     */
    public static function destroyOrFail($id): self
    {
    }

    /**
     * Set the record field value
     *
     * @param string|int|null $name
     * @param mixed $value
     * @param bool $throwException
     * @return $this|false
     * @see BannerModel::set
     */
    public static function set($name, $value, bool $throwException = true)
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or false
     *
     * @param int|string|array|null $id
     * @return $this|null
     * @see BannerModel::find
     */
    public static function find($id): ?self
    {
    }

    /**
     * Find a record by primary key, or throws 404 exception if record not found
     *
     * @param int|string $id
     * @return $this
     * @throws \Exception
     * @see BannerModel::findOrFail
     */
    public static function findOrFail($id): self
    {
    }

    /**
     * Find a record by primary key, or init with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array|object $attributes
     * @return $this
     * @see BannerModel::findOrInit
     */
    public static function findOrInit($id = null, $attributes = []): self
    {
    }

    /**
     * Find a record by primary key, or save with the specified attributes if record not found
     *
     * @param int|string $id
     * @param array $attributes
     * @return $this
     * @see BannerModel::findOrCreate
     */
    public static function findOrCreate($id, $attributes = []): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see BannerModel::findByOrCreate
     */
    public static function findByOrCreate($attributes, $data = []): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record collection object or false
     *
     * @param array $ids
     * @return $this|$this[]
     * @phpstan-return $this
     * @see BannerModel::findAll
     */
    public static function findAll(array $ids): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|null
     * @see BannerModel::findBy
     */
    public static function findBy($column, $operator = null, $value = null): ?self
    {
    }

    /**
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this|$this[]
     * @phpstan-return $this
     * @see BannerModel::findAllBy
     */
    public static function findAllBy($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param array $attributes
     * @param array|object $data
     * @return $this
     * @see BannerModel::findOrInitBy
     */
    public static function findOrInitBy(array $attributes = [], $data = []): self
    {
    }

    /**
     * Find a record by primary key value and throws 404 exception if record not found
     *
     * @param mixed $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @throws \Exception
     * @see BannerModel::findByOrFail
     */
    public static function findByOrFail($column, $operator = null, $value = null): self
    {
    }

    /**
     * @param Req|null $req
     * @return $this
     * @throws \Exception
     * @see BannerModel::findFromReq
     */
    public static function findFromReq(\Wei\Req $req = null): self
    {
    }

    /**
     * Executes the generated SQL and returns the found record object or null if not found
     *
     * @return $this|null
     * @see BannerModel::first
     */
    public static function first(): ?self
    {
    }

    /**
     * @return $this|$this[]
     * @phpstan-return $this
     * @see BannerModel::all
     */
    public static function all(): self
    {
    }

    /**
     * Coll: Specifies a field to be the key of the fetched array
     *
     * @param string $column
     * @return $this
     * @see BannerModel::indexBy
     */
    public static function indexBy(string $column): self
    {
    }

    /**
     * Execute a update query with specified data
     *
     * @param array|string $set
     * @param mixed $value
     * @return int
     * @see BannerModel::update
     */
    public static function update($set = [], $value = null): int
    {
    }

    /**
     * @param array|string|true $scopes
     * @return $this
     * @see BannerModel::unscoped
     */
    public static function unscoped($scopes = []): self
    {
    }

    /**
     * Set or remove cache time for the query
     *
     * @param int|null $seconds
     * @return $this
     * @see BannerModel::setCacheTime
     */
    public static function setCacheTime(?int $seconds): self
    {
    }

    /**
     * Returns the name of columns of current table
     *
     * @return array
     * @see BannerModel::getColumns
     */
    public static function getColumns(): array
    {
    }

    /**
     * Check if column name exists
     *
     * @param string|int|null $name
     * @return bool
     * @see BannerModel::hasColumn
     */
    public static function hasColumn($name): bool
    {
    }

    /**
     * Executes the generated query and returns the first array result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array|null
     * @see BannerModel::fetch
     */
    public static function fetch($column = null, $operator = null, $value = null): ?array
    {
    }

    /**
     * Executes the generated query and returns all array results
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return array
     * @see BannerModel::fetchAll
     */
    public static function fetchAll($column = null, $operator = null, $value = null): array
    {
    }

    /**
     * Check if the query has result
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return bool
     * @see BannerModel::exists
     */
    public static function exists($column = null, $operator = null, $value = null): bool
    {
    }

    /**
     * @param string $column
     * @param string|null $index
     * @return array
     * @see BannerModel::pluck
     */
    public static function pluck(string $column, string $index = null): array
    {
    }

    /**
     * @param int $count
     * @param callable $callback
     * @return bool
     * @see BannerModel::chunk
     */
    public static function chunk(int $count, callable $callback): bool
    {
    }

    /**
     * Executes a COUNT query to receive the rows number
     *
     * @param string $column
     * @return int
     * @see BannerModel::cnt
     */
    public static function cnt($column = '*'): int
    {
    }

    /**
     * Executes a MAX query to receive the max value of column
     *
     * @param string $column
     * @return string|null
     * @see BannerModel::max
     */
    public static function max(string $column): ?string
    {
    }

    /**
     * Execute a delete query with specified conditions
     *
     * @param mixed|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return int
     * @see BannerModel::delete
     */
    public static function delete($column = null, $operator = null, $value = null): int
    {
    }

    /**
     * Sets the position of the first result to retrieve (the "offset")
     *
     * @param int|float|string $offset The first result to return
     * @return $this
     * @see BannerModel::offset
     */
    public static function offset($offset): self
    {
    }

    /**
     * Sets the maximum number of results to retrieve (the "limit")
     *
     * @param int|float|string $limit The maximum number of results to retrieve
     * @return $this
     * @see BannerModel::limit
     */
    public static function limit($limit): self
    {
    }

    /**
     * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
     *
     * @param int $page The page number
     * @return $this
     * @see BannerModel::page
     */
    public static function page($page): self
    {
    }

    /**
     * Specifies an item that is to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns the selection expressions
     * @return $this
     * @see BannerModel::select
     */
    public static function select($columns = ['*']): self
    {
    }

    /**
     * @param array|string $columns
     * @return $this
     * @see BannerModel::selectDistinct
     */
    public static function selectDistinct($columns): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see BannerModel::selectRaw
     */
    public static function selectRaw($expression): self
    {
    }

    /**
     * Specifies columns that are not to be returned in the query result.
     * Replaces any previously specified selections, if any.
     *
     * @param array|string $columns
     * @return $this
     * @see BannerModel::selectExcept
     */
    public static function selectExcept($columns): self
    {
    }

    /**
     * Specifies an item of the main table that is to be returned in the query result.
     * Default to all columns of the main table
     *
     * @param string $column
     * @return $this
     * @see BannerModel::selectMain
     */
    public static function selectMain(string $column = '*'): self
    {
    }

    /**
     * Sets table for FROM query
     *
     * @param string $table
     * @param string|null $alias
     * @return $this
     * @see BannerModel::from
     */
    public static function from(string $table, $alias = null): self
    {
    }

    /**
     * @param string $table
     * @param mixed|null $alias
     * @return $this
     * @see BannerModel::table
     */
    public static function table(string $table, $alias = null): self
    {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @param string $type
     * @return $this
     * @see BannerModel::join
     */
    public static function join(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null,
        string $type = 'INNER'
    ): self {
    }

    /**
     * Adds a inner join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see BannerModel::innerJoin
     */
    public static function innerJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a left join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see BannerModel::leftJoin
     */
    public static function leftJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Adds a right join to the query
     *
     * @param string $table The table name to join
     * @param string|null $first
     * @param string $operator
     * @param string|null $second
     * @return $this
     * @see BannerModel::rightJoin
     */
    public static function rightJoin(
        string $table,
        string $first = null,
        string $operator = '=',
        string $second = null
    ): self {
    }

    /**
     * Specifies one or more restrictions to the query result.
     * Replaces any previously specified restrictions, if any.
     *
     * ```php
     * $user = QueryBuilder::table('user')->where('id', 1);
     * $users = QueryBuilder::table('user')->where('id', '>', 1);
     * $users = QueryBuilder::table('user')->where(['id' => '1', 'username' => 'twin']);
     * $users = QueryBuilder::table('user')->where(['id' => ['1', '2', '3']]);
     * ```
     *
     * @param array|Closure|string|null $column
     * @param mixed|null $operator
     * @param mixed|null $value
     * @return $this
     * @see BannerModel::where
     */
    public static function where($column = null, $operator = null, $value = null): self
    {
    }

    /**
     * @param string $expression
     * @param mixed $params
     * @return $this
     * @see BannerModel::whereRaw
     */
    public static function whereRaw($expression, $params = null): self
    {
    }

    /**
     * @param mixed $column
     * @param mixed $value
     * @return $this
     * @see BannerModel::whereNot
     */
    public static function whereNot($column, $value): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see BannerModel::whereBetween
     */
    public static function whereBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see BannerModel::whereNotBetween
     */
    public static function whereNotBetween(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see BannerModel::whereIn
     */
    public static function whereIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @param array $params
     * @return $this
     * @see BannerModel::whereNotIn
     */
    public static function whereNotIn(string $column, array $params): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see BannerModel::whereNull
     */
    public static function whereNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @return $this
     * @see BannerModel::whereNotNull
     */
    public static function whereNotNull(string $column): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see BannerModel::whereDate
     */
    public static function whereDate(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see BannerModel::whereMonth
     */
    public static function whereMonth(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see BannerModel::whereDay
     */
    public static function whereDay(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see BannerModel::whereYear
     */
    public static function whereYear(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrValue
     * @param mixed|null $value
     * @return $this
     * @see BannerModel::whereTime
     */
    public static function whereTime(string $column, $opOrValue, $value = null): self
    {
    }

    /**
     * @param string $column
     * @param mixed $opOrColumn2
     * @param mixed|null $column2
     * @return $this
     * @see BannerModel::whereColumn
     */
    public static function whereColumn(string $column, $opOrColumn2, $column2 = null): self
    {
    }

    /**
     * 搜索字段是否包含某个值
     *
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see BannerModel::whereContains
     */
    public static function whereContains(string $column, $value, string $condition = 'AND'): self
    {
    }

    /**
     * @param string $column
     * @param mixed $value
     * @param string $condition
     * @return $this
     * @see BannerModel::whereNotContains
     */
    public static function whereNotContains(string $column, $value, string $condition = 'OR'): self
    {
    }

    /**
     * Search whether a column has a value other than the default value
     *
     * @param string $column
     * @param bool $has
     * @return $this
     * @see BannerModel::whereHas
     */
    public static function whereHas(string $column, bool $has = true): self
    {
    }

    /**
     * @param mixed $if
     * @param mixed ...$args
     * @return $this
     * @see BannerModel::whereIf
     */
    public static function whereIf($if, ...$args): self
    {
    }

    /**
     * Search whether a column dont have a value other than the default value
     *
     * @param string $column
     * @return $this
     * @see BannerModel::whereNotHas
     */
    public static function whereNotHas(string $column): self
    {
    }

    /**
     * Specifies a grouping over the results of the query.
     * Replaces any previously specified groupings, if any.
     *
     * @param mixed $column the grouping column
     * @return $this
     * @see BannerModel::groupBy
     */
    public static function groupBy($column): self
    {
    }

    /**
     * Specifies a restriction over the groups of the query.
     * Replaces any previous having restrictions, if any.
     *
     * @param mixed $column
     * @param mixed $operator
     * @param mixed|null $value
     * @param mixed $condition
     * @return $this
     * @see BannerModel::having
     */
    public static function having($column, $operator, $value = null, $condition = 'AND'): self
    {
    }

    /**
     * Specifies an ordering for the query results.
     * Replaces any previously specified orderings, if any.
     *
     * @param string|Raw $column the ordering expression
     * @param string $order the ordering direction
     * @return $this
     * @see BannerModel::orderBy
     */
    public static function orderBy($column, $order = 'ASC'): self
    {
    }

    /**
     * @param string $expression
     * @return $this
     * @see BannerModel::orderByRaw
     */
    public static function orderByRaw($expression): self
    {
    }

    /**
     * Adds a DESC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see BannerModel::desc
     */
    public static function desc(string $field): self
    {
    }

    /**
     * Add an ASC ordering to the query
     *
     * @param string $field The name of field
     * @return $this
     * @see BannerModel::asc
     */
    public static function asc(string $field): self
    {
    }

    /**
     * @return $this
     * @see BannerModel::forUpdate
     */
    public static function forUpdate(): self
    {
    }

    /**
     * @return $this
     * @see BannerModel::forShare
     */
    public static function forShare(): self
    {
    }

    /**
     * @param string|bool $lock
     * @return $this
     * @see BannerModel::lock
     */
    public static function lock($lock): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see BannerModel::when
     */
    public static function when($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param mixed $value
     * @param callable $callback
     * @param callable|null $default
     * @return $this
     * @see BannerModel::unless
     */
    public static function unless($value, callable $callback, callable $default = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see BannerModel::setDbKeyConverter
     */
    public static function setDbKeyConverter(callable $converter = null): self
    {
    }

    /**
     * @param callable|null $converter
     * @return $this
     * @see BannerModel::setPhpKeyConverter
     */
    public static function setPhpKeyConverter(callable $converter = null): self
    {
    }

    /**
     * Add a (inner) join base on the relation to the query
     *
     * @param string|array $name
     * @param string $type
     * @return $this
     * @see BannerModel::joinRelation
     */
    public static function joinRelation($name, string $type = 'INNER'): self
    {
    }

    /**
     * Add a inner join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see BannerModel::innerJoinRelation
     */
    public static function innerJoinRelation($name): self
    {
    }

    /**
     * Add a left join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see BannerModel::leftJoinRelation
     */
    public static function leftJoinRelation($name): self
    {
    }

    /**
     * Add a right join base on the relation to the query
     *
     * @param string|array $name
     * @return $this
     * @see BannerModel::rightJoinRelation
     */
    public static function rightJoinRelation($name): self
    {
    }

    /**
     * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
     *
     * This method only checks whether the specified method has the "Relation" attribute,
     * and does not check the actual logic.
     * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
     *
     * @param string $method
     * @return bool
     * @see BannerModel::isRelation
     */
    public static function isRelation(string $method): bool
    {
    }

    /**
     * Really remove the record from database
     *
     * @param int|string $id
     * @return $this
     * @see BannerModel::reallyDestroy
     */
    public static function reallyDestroy($id = null): self
    {
    }

    /**
     * Add a query to filter soft deleted records
     *
     * @return $this
     * @see BannerModel::withoutDeleted
     */
    public static function withoutDeleted(): self
    {
    }

    /**
     * Add a query to return only deleted records
     *
     * @return $this
     * @see BannerModel::onlyDeleted
     */
    public static function onlyDeleted(): self
    {
    }

    /**
     * Remove "withoutDeleted" in the query, expect to return all records
     *
     * @return $this
     * @see BannerModel::withDeleted
     */
    public static function withDeleted(): self
    {
    }

    /**
     * Add a query to return only purged records
     *
     * @return $this
     * @see BannerModel::onlyPurged
     */
    public static function onlyPurged(): self
    {
    }
}

namespace Miaoxing\Banner\Service;

if (0) {
    class BannerCategoryModel
    {
        /**
         * Returns the success result with model data
         *
         * @param array|string|BaseResource|mixed $merge
         * @return Ret
         * @see BannerCategoryModel::toRet
         */
        public function toRet($merge = []): \Wei\Ret
        {
        }

        /**
         * Set each attribute value, without checking whether the column is fillable, and save the model
         *
         * @param iterable $attributes
         * @return $this
         * @see BannerCategoryModel::saveAttributes
         */
        public function saveAttributes(iterable $attributes = []): self
        {
        }

        /**
         * Returns the record data as array
         *
         * @param array|callable $returnFields A indexed array specified the fields to return
         * @param callable|null $prepend
         * @return array
         * @see BannerCategoryModel::toArray
         */
        public function toArray($returnFields = [], callable $prepend = null): array
        {
        }

        /**
         * Return the record table name
         *
         * @return string
         * @see BannerCategoryModel::getTable
         */
        public function getTable(): string
        {
        }

        /**
         * Import a PHP array in this record
         *
         * @param iterable $array
         * @return $this
         * @see BannerCategoryModel::fromArray
         */
        public function fromArray(iterable $array): self
        {
        }

        /**
         * Save the record or data to database
         *
         * @param iterable $attributes
         * @return $this
         * @see BannerCategoryModel::save
         */
        public function save(iterable $attributes = []): self
        {
        }

        /**
         * Delete the current record and trigger the beforeDestroy and afterDestroy callback
         *
         * @param int|string $id
         * @return $this
         * @see BannerCategoryModel::destroy
         */
        public function destroy($id = null): self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
         *
         * @param string|int $id
         * @return $this
         * @throws \Exception when record not found
         * @see BannerCategoryModel::destroyOrFail
         */
        public function destroyOrFail($id): self
        {
        }

        /**
         * Set the record field value
         *
         * @param string|int|null $name
         * @param mixed $value
         * @param bool $throwException
         * @return $this|false
         * @see BannerCategoryModel::set
         */
        public function set($name, $value, bool $throwException = true)
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or false
         *
         * @param int|string|array|null $id
         * @return $this|null
         * @see BannerCategoryModel::find
         */
        public function find($id): ?self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found
         *
         * @param int|string $id
         * @return $this
         * @throws \Exception
         * @see BannerCategoryModel::findOrFail
         */
        public function findOrFail($id): self
        {
        }

        /**
         * Find a record by primary key, or init with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array|object $attributes
         * @return $this
         * @see BannerCategoryModel::findOrInit
         */
        public function findOrInit($id = null, $attributes = []): self
        {
        }

        /**
         * Find a record by primary key, or save with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array $attributes
         * @return $this
         * @see BannerCategoryModel::findOrCreate
         */
        public function findOrCreate($id, $attributes = []): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see BannerCategoryModel::findByOrCreate
         */
        public function findByOrCreate($attributes, $data = []): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record collection object or false
         *
         * @param array $ids
         * @return $this|$this[]
         * @phpstan-return $this
         * @see BannerCategoryModel::findAll
         */
        public function findAll(array $ids): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|null
         * @see BannerCategoryModel::findBy
         */
        public function findBy($column, $operator = null, $value = null): ?self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|$this[]
         * @phpstan-return $this
         * @see BannerCategoryModel::findAllBy
         */
        public function findAllBy($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see BannerCategoryModel::findOrInitBy
         */
        public function findOrInitBy(array $attributes = [], $data = []): self
        {
        }

        /**
         * Find a record by primary key value and throws 404 exception if record not found
         *
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @throws \Exception
         * @see BannerCategoryModel::findByOrFail
         */
        public function findByOrFail($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param Req|null $req
         * @return $this
         * @throws \Exception
         * @see BannerCategoryModel::findFromReq
         */
        public function findFromReq(\Wei\Req $req = null): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or null if not found
         *
         * @return $this|null
         * @see BannerCategoryModel::first
         */
        public function first(): ?self
        {
        }

        /**
         * @return $this|$this[]
         * @phpstan-return $this
         * @see BannerCategoryModel::all
         */
        public function all(): self
        {
        }

        /**
         * Coll: Specifies a field to be the key of the fetched array
         *
         * @param string $column
         * @return $this
         * @see BannerCategoryModel::indexBy
         */
        public function indexBy(string $column): self
        {
        }

        /**
         * Execute a update query with specified data
         *
         * @param array|string $set
         * @param mixed $value
         * @return int
         * @see BannerCategoryModel::update
         */
        public function update($set = [], $value = null): int
        {
        }

        /**
         * @param array|string|true $scopes
         * @return $this
         * @see BannerCategoryModel::unscoped
         */
        public function unscoped($scopes = []): self
        {
        }

        /**
         * Set or remove cache time for the query
         *
         * @param int|null $seconds
         * @return $this
         * @see BannerCategoryModel::setCacheTime
         */
        public function setCacheTime(?int $seconds): self
        {
        }

        /**
         * Returns the name of columns of current table
         *
         * @return array
         * @see BannerCategoryModel::getColumns
         */
        public function getColumns(): array
        {
        }

        /**
         * Check if column name exists
         *
         * @param string|int|null $name
         * @return bool
         * @see BannerCategoryModel::hasColumn
         */
        public function hasColumn($name): bool
        {
        }

        /**
         * Executes the generated query and returns the first array result
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array|null
         * @see BannerCategoryModel::fetch
         */
        public function fetch($column = null, $operator = null, $value = null): ?array
        {
        }

        /**
         * Executes the generated query and returns all array results
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array
         * @see BannerCategoryModel::fetchAll
         */
        public function fetchAll($column = null, $operator = null, $value = null): array
        {
        }

        /**
         * Check if the query has result
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return bool
         * @see BannerCategoryModel::exists
         */
        public function exists($column = null, $operator = null, $value = null): bool
        {
        }

        /**
         * @param string $column
         * @param string|null $index
         * @return array
         * @see BannerCategoryModel::pluck
         */
        public function pluck(string $column, string $index = null): array
        {
        }

        /**
         * @param int $count
         * @param callable $callback
         * @return bool
         * @see BannerCategoryModel::chunk
         */
        public function chunk(int $count, callable $callback): bool
        {
        }

        /**
         * Executes a COUNT query to receive the rows number
         *
         * @param string $column
         * @return int
         * @see BannerCategoryModel::cnt
         */
        public function cnt($column = '*'): int
        {
        }

        /**
         * Executes a MAX query to receive the max value of column
         *
         * @param string $column
         * @return string|null
         * @see BannerCategoryModel::max
         */
        public function max(string $column): ?string
        {
        }

        /**
         * Execute a delete query with specified conditions
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return int
         * @see BannerCategoryModel::delete
         */
        public function delete($column = null, $operator = null, $value = null): int
        {
        }

        /**
         * Sets the position of the first result to retrieve (the "offset")
         *
         * @param int|float|string $offset The first result to return
         * @return $this
         * @see BannerCategoryModel::offset
         */
        public function offset($offset): self
        {
        }

        /**
         * Sets the maximum number of results to retrieve (the "limit")
         *
         * @param int|float|string $limit The maximum number of results to retrieve
         * @return $this
         * @see BannerCategoryModel::limit
         */
        public function limit($limit): self
        {
        }

        /**
         * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
         *
         * @param int $page The page number
         * @return $this
         * @see BannerCategoryModel::page
         */
        public function page($page): self
        {
        }

        /**
         * Specifies an item that is to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns the selection expressions
         * @return $this
         * @see BannerCategoryModel::select
         */
        public function select($columns = ['*']): self
        {
        }

        /**
         * @param array|string $columns
         * @return $this
         * @see BannerCategoryModel::selectDistinct
         */
        public function selectDistinct($columns): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see BannerCategoryModel::selectRaw
         */
        public function selectRaw($expression): self
        {
        }

        /**
         * Specifies columns that are not to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns
         * @return $this
         * @see BannerCategoryModel::selectExcept
         */
        public function selectExcept($columns): self
        {
        }

        /**
         * Specifies an item of the main table that is to be returned in the query result.
         * Default to all columns of the main table
         *
         * @param string $column
         * @return $this
         * @see BannerCategoryModel::selectMain
         */
        public function selectMain(string $column = '*'): self
        {
        }

        /**
         * Sets table for FROM query
         *
         * @param string $table
         * @param string|null $alias
         * @return $this
         * @see BannerCategoryModel::from
         */
        public function from(string $table, $alias = null): self
        {
        }

        /**
         * @param string $table
         * @param mixed|null $alias
         * @return $this
         * @see BannerCategoryModel::table
         */
        public function table(string $table, $alias = null): self
        {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @param string $type
         * @return $this
         * @see BannerCategoryModel::join
         */
        public function join(
            string $table,
            string $first = null,
            string $operator = '=',
            string $second = null,
            string $type = 'INNER'
        ): self {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see BannerCategoryModel::innerJoin
         */
        public function innerJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a left join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see BannerCategoryModel::leftJoin
         */
        public function leftJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a right join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see BannerCategoryModel::rightJoin
         */
        public function rightJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Specifies one or more restrictions to the query result.
         * Replaces any previously specified restrictions, if any.
         *
         * ```php
         * $user = QueryBuilder::table('user')->where('id', 1);
         * $users = QueryBuilder::table('user')->where('id', '>', 1);
         * $users = QueryBuilder::table('user')->where(['id' => '1', 'username' => 'twin']);
         * $users = QueryBuilder::table('user')->where(['id' => ['1', '2', '3']]);
         * ```
         *
         * @param array|Closure|string|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @see BannerCategoryModel::where
         */
        public function where($column = null, $operator = null, $value = null): self
        {
        }

        /**
         * @param string $expression
         * @param mixed $params
         * @return $this
         * @see BannerCategoryModel::whereRaw
         */
        public function whereRaw($expression, $params = null): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed $value
         * @return $this
         * @see BannerCategoryModel::whereNot
         */
        public function whereNot($column, $value): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see BannerCategoryModel::whereBetween
         */
        public function whereBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see BannerCategoryModel::whereNotBetween
         */
        public function whereNotBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see BannerCategoryModel::whereIn
         */
        public function whereIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see BannerCategoryModel::whereNotIn
         */
        public function whereNotIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see BannerCategoryModel::whereNull
         */
        public function whereNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see BannerCategoryModel::whereNotNull
         */
        public function whereNotNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see BannerCategoryModel::whereDate
         */
        public function whereDate(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see BannerCategoryModel::whereMonth
         */
        public function whereMonth(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see BannerCategoryModel::whereDay
         */
        public function whereDay(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see BannerCategoryModel::whereYear
         */
        public function whereYear(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see BannerCategoryModel::whereTime
         */
        public function whereTime(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrColumn2
         * @param mixed|null $column2
         * @return $this
         * @see BannerCategoryModel::whereColumn
         */
        public function whereColumn(string $column, $opOrColumn2, $column2 = null): self
        {
        }

        /**
         * 搜索字段是否包含某个值
         *
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see BannerCategoryModel::whereContains
         */
        public function whereContains(string $column, $value, string $condition = 'AND'): self
        {
        }

        /**
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see BannerCategoryModel::whereNotContains
         */
        public function whereNotContains(string $column, $value, string $condition = 'OR'): self
        {
        }

        /**
         * Search whether a column has a value other than the default value
         *
         * @param string $column
         * @param bool $has
         * @return $this
         * @see BannerCategoryModel::whereHas
         */
        public function whereHas(string $column, bool $has = true): self
        {
        }

        /**
         * @param mixed $if
         * @param mixed ...$args
         * @return $this
         * @see BannerCategoryModel::whereIf
         */
        public function whereIf($if, ...$args): self
        {
        }

        /**
         * Search whether a column dont have a value other than the default value
         *
         * @param string $column
         * @return $this
         * @see BannerCategoryModel::whereNotHas
         */
        public function whereNotHas(string $column): self
        {
        }

        /**
         * Specifies a grouping over the results of the query.
         * Replaces any previously specified groupings, if any.
         *
         * @param mixed $column the grouping column
         * @return $this
         * @see BannerCategoryModel::groupBy
         */
        public function groupBy($column): self
        {
        }

        /**
         * Specifies a restriction over the groups of the query.
         * Replaces any previous having restrictions, if any.
         *
         * @param mixed $column
         * @param mixed $operator
         * @param mixed|null $value
         * @param mixed $condition
         * @return $this
         * @see BannerCategoryModel::having
         */
        public function having($column, $operator, $value = null, $condition = 'AND'): self
        {
        }

        /**
         * Specifies an ordering for the query results.
         * Replaces any previously specified orderings, if any.
         *
         * @param string|Raw $column the ordering expression
         * @param string $order the ordering direction
         * @return $this
         * @see BannerCategoryModel::orderBy
         */
        public function orderBy($column, $order = 'ASC'): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see BannerCategoryModel::orderByRaw
         */
        public function orderByRaw($expression): self
        {
        }

        /**
         * Adds a DESC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see BannerCategoryModel::desc
         */
        public function desc(string $field): self
        {
        }

        /**
         * Add an ASC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see BannerCategoryModel::asc
         */
        public function asc(string $field): self
        {
        }

        /**
         * @return $this
         * @see BannerCategoryModel::forUpdate
         */
        public function forUpdate(): self
        {
        }

        /**
         * @return $this
         * @see BannerCategoryModel::forShare
         */
        public function forShare(): self
        {
        }

        /**
         * @param string|bool $lock
         * @return $this
         * @see BannerCategoryModel::lock
         */
        public function lock($lock): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see BannerCategoryModel::when
         */
        public function when($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see BannerCategoryModel::unless
         */
        public function unless($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see BannerCategoryModel::setDbKeyConverter
         */
        public function setDbKeyConverter(callable $converter = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see BannerCategoryModel::setPhpKeyConverter
         */
        public function setPhpKeyConverter(callable $converter = null): self
        {
        }

        /**
         * Add a (inner) join base on the relation to the query
         *
         * @param string|array $name
         * @param string $type
         * @return $this
         * @see BannerCategoryModel::joinRelation
         */
        public function joinRelation($name, string $type = 'INNER'): self
        {
        }

        /**
         * Add a inner join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see BannerCategoryModel::innerJoinRelation
         */
        public function innerJoinRelation($name): self
        {
        }

        /**
         * Add a left join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see BannerCategoryModel::leftJoinRelation
         */
        public function leftJoinRelation($name): self
        {
        }

        /**
         * Add a right join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see BannerCategoryModel::rightJoinRelation
         */
        public function rightJoinRelation($name): self
        {
        }

        /**
         * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
         *
         * This method only checks whether the specified method has the "Relation" attribute,
         * and does not check the actual logic.
         * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
         *
         * @param string $method
         * @return bool
         * @see BannerCategoryModel::isRelation
         */
        public function isRelation(string $method): bool
        {
        }

        /**
         * Really remove the record from database
         *
         * @param int|string $id
         * @return $this
         * @see BannerCategoryModel::reallyDestroy
         */
        public function reallyDestroy($id = null): self
        {
        }

        /**
         * Add a query to filter soft deleted records
         *
         * @return $this
         * @see BannerCategoryModel::withoutDeleted
         */
        public function withoutDeleted(): self
        {
        }

        /**
         * Add a query to return only deleted records
         *
         * @return $this
         * @see BannerCategoryModel::onlyDeleted
         */
        public function onlyDeleted(): self
        {
        }

        /**
         * Remove "withoutDeleted" in the query, expect to return all records
         *
         * @return $this
         * @see BannerCategoryModel::withDeleted
         */
        public function withDeleted(): self
        {
        }

        /**
         * Add a query to return only purged records
         *
         * @return $this
         * @see BannerCategoryModel::onlyPurged
         */
        public function onlyPurged(): self
        {
        }
    }

    class BannerModel
    {
        /**
         * Returns the success result with model data
         *
         * @param array|string|BaseResource|mixed $merge
         * @return Ret
         * @see BannerModel::toRet
         */
        public function toRet($merge = []): \Wei\Ret
        {
        }

        /**
         * Set each attribute value, without checking whether the column is fillable, and save the model
         *
         * @param iterable $attributes
         * @return $this
         * @see BannerModel::saveAttributes
         */
        public function saveAttributes(iterable $attributes = []): self
        {
        }

        /**
         * Returns the record data as array
         *
         * @param array|callable $returnFields A indexed array specified the fields to return
         * @param callable|null $prepend
         * @return array
         * @see BannerModel::toArray
         */
        public function toArray($returnFields = [], callable $prepend = null): array
        {
        }

        /**
         * Return the record table name
         *
         * @return string
         * @see BannerModel::getTable
         */
        public function getTable(): string
        {
        }

        /**
         * Import a PHP array in this record
         *
         * @param iterable $array
         * @return $this
         * @see BannerModel::fromArray
         */
        public function fromArray(iterable $array): self
        {
        }

        /**
         * Save the record or data to database
         *
         * @param iterable $attributes
         * @return $this
         * @see BannerModel::save
         */
        public function save(iterable $attributes = []): self
        {
        }

        /**
         * Delete the current record and trigger the beforeDestroy and afterDestroy callback
         *
         * @param int|string $id
         * @return $this
         * @see BannerModel::destroy
         */
        public function destroy($id = null): self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found, then destroy the record
         *
         * @param string|int $id
         * @return $this
         * @throws \Exception when record not found
         * @see BannerModel::destroyOrFail
         */
        public function destroyOrFail($id): self
        {
        }

        /**
         * Set the record field value
         *
         * @param string|int|null $name
         * @param mixed $value
         * @param bool $throwException
         * @return $this|false
         * @see BannerModel::set
         */
        public function set($name, $value, bool $throwException = true)
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or false
         *
         * @param int|string|array|null $id
         * @return $this|null
         * @see BannerModel::find
         */
        public function find($id): ?self
        {
        }

        /**
         * Find a record by primary key, or throws 404 exception if record not found
         *
         * @param int|string $id
         * @return $this
         * @throws \Exception
         * @see BannerModel::findOrFail
         */
        public function findOrFail($id): self
        {
        }

        /**
         * Find a record by primary key, or init with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array|object $attributes
         * @return $this
         * @see BannerModel::findOrInit
         */
        public function findOrInit($id = null, $attributes = []): self
        {
        }

        /**
         * Find a record by primary key, or save with the specified attributes if record not found
         *
         * @param int|string $id
         * @param array $attributes
         * @return $this
         * @see BannerModel::findOrCreate
         */
        public function findOrCreate($id, $attributes = []): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see BannerModel::findByOrCreate
         */
        public function findByOrCreate($attributes, $data = []): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record collection object or false
         *
         * @param array $ids
         * @return $this|$this[]
         * @phpstan-return $this
         * @see BannerModel::findAll
         */
        public function findAll(array $ids): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|null
         * @see BannerModel::findBy
         */
        public function findBy($column, $operator = null, $value = null): ?self
        {
        }

        /**
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this|$this[]
         * @phpstan-return $this
         * @see BannerModel::findAllBy
         */
        public function findAllBy($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param array $attributes
         * @param array|object $data
         * @return $this
         * @see BannerModel::findOrInitBy
         */
        public function findOrInitBy(array $attributes = [], $data = []): self
        {
        }

        /**
         * Find a record by primary key value and throws 404 exception if record not found
         *
         * @param mixed $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @throws \Exception
         * @see BannerModel::findByOrFail
         */
        public function findByOrFail($column, $operator = null, $value = null): self
        {
        }

        /**
         * @param Req|null $req
         * @return $this
         * @throws \Exception
         * @see BannerModel::findFromReq
         */
        public function findFromReq(\Wei\Req $req = null): self
        {
        }

        /**
         * Executes the generated SQL and returns the found record object or null if not found
         *
         * @return $this|null
         * @see BannerModel::first
         */
        public function first(): ?self
        {
        }

        /**
         * @return $this|$this[]
         * @phpstan-return $this
         * @see BannerModel::all
         */
        public function all(): self
        {
        }

        /**
         * Coll: Specifies a field to be the key of the fetched array
         *
         * @param string $column
         * @return $this
         * @see BannerModel::indexBy
         */
        public function indexBy(string $column): self
        {
        }

        /**
         * Execute a update query with specified data
         *
         * @param array|string $set
         * @param mixed $value
         * @return int
         * @see BannerModel::update
         */
        public function update($set = [], $value = null): int
        {
        }

        /**
         * @param array|string|true $scopes
         * @return $this
         * @see BannerModel::unscoped
         */
        public function unscoped($scopes = []): self
        {
        }

        /**
         * Set or remove cache time for the query
         *
         * @param int|null $seconds
         * @return $this
         * @see BannerModel::setCacheTime
         */
        public function setCacheTime(?int $seconds): self
        {
        }

        /**
         * Returns the name of columns of current table
         *
         * @return array
         * @see BannerModel::getColumns
         */
        public function getColumns(): array
        {
        }

        /**
         * Check if column name exists
         *
         * @param string|int|null $name
         * @return bool
         * @see BannerModel::hasColumn
         */
        public function hasColumn($name): bool
        {
        }

        /**
         * Executes the generated query and returns the first array result
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array|null
         * @see BannerModel::fetch
         */
        public function fetch($column = null, $operator = null, $value = null): ?array
        {
        }

        /**
         * Executes the generated query and returns all array results
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return array
         * @see BannerModel::fetchAll
         */
        public function fetchAll($column = null, $operator = null, $value = null): array
        {
        }

        /**
         * Check if the query has result
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return bool
         * @see BannerModel::exists
         */
        public function exists($column = null, $operator = null, $value = null): bool
        {
        }

        /**
         * @param string $column
         * @param string|null $index
         * @return array
         * @see BannerModel::pluck
         */
        public function pluck(string $column, string $index = null): array
        {
        }

        /**
         * @param int $count
         * @param callable $callback
         * @return bool
         * @see BannerModel::chunk
         */
        public function chunk(int $count, callable $callback): bool
        {
        }

        /**
         * Executes a COUNT query to receive the rows number
         *
         * @param string $column
         * @return int
         * @see BannerModel::cnt
         */
        public function cnt($column = '*'): int
        {
        }

        /**
         * Executes a MAX query to receive the max value of column
         *
         * @param string $column
         * @return string|null
         * @see BannerModel::max
         */
        public function max(string $column): ?string
        {
        }

        /**
         * Execute a delete query with specified conditions
         *
         * @param mixed|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return int
         * @see BannerModel::delete
         */
        public function delete($column = null, $operator = null, $value = null): int
        {
        }

        /**
         * Sets the position of the first result to retrieve (the "offset")
         *
         * @param int|float|string $offset The first result to return
         * @return $this
         * @see BannerModel::offset
         */
        public function offset($offset): self
        {
        }

        /**
         * Sets the maximum number of results to retrieve (the "limit")
         *
         * @param int|float|string $limit The maximum number of results to retrieve
         * @return $this
         * @see BannerModel::limit
         */
        public function limit($limit): self
        {
        }

        /**
         * Sets the page number, the "OFFSET" value is equals "($page - 1) * LIMIT"
         *
         * @param int $page The page number
         * @return $this
         * @see BannerModel::page
         */
        public function page($page): self
        {
        }

        /**
         * Specifies an item that is to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns the selection expressions
         * @return $this
         * @see BannerModel::select
         */
        public function select($columns = ['*']): self
        {
        }

        /**
         * @param array|string $columns
         * @return $this
         * @see BannerModel::selectDistinct
         */
        public function selectDistinct($columns): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see BannerModel::selectRaw
         */
        public function selectRaw($expression): self
        {
        }

        /**
         * Specifies columns that are not to be returned in the query result.
         * Replaces any previously specified selections, if any.
         *
         * @param array|string $columns
         * @return $this
         * @see BannerModel::selectExcept
         */
        public function selectExcept($columns): self
        {
        }

        /**
         * Specifies an item of the main table that is to be returned in the query result.
         * Default to all columns of the main table
         *
         * @param string $column
         * @return $this
         * @see BannerModel::selectMain
         */
        public function selectMain(string $column = '*'): self
        {
        }

        /**
         * Sets table for FROM query
         *
         * @param string $table
         * @param string|null $alias
         * @return $this
         * @see BannerModel::from
         */
        public function from(string $table, $alias = null): self
        {
        }

        /**
         * @param string $table
         * @param mixed|null $alias
         * @return $this
         * @see BannerModel::table
         */
        public function table(string $table, $alias = null): self
        {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @param string $type
         * @return $this
         * @see BannerModel::join
         */
        public function join(
            string $table,
            string $first = null,
            string $operator = '=',
            string $second = null,
            string $type = 'INNER'
        ): self {
        }

        /**
         * Adds a inner join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see BannerModel::innerJoin
         */
        public function innerJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a left join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see BannerModel::leftJoin
         */
        public function leftJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Adds a right join to the query
         *
         * @param string $table The table name to join
         * @param string|null $first
         * @param string $operator
         * @param string|null $second
         * @return $this
         * @see BannerModel::rightJoin
         */
        public function rightJoin(string $table, string $first = null, string $operator = '=', string $second = null): self
        {
        }

        /**
         * Specifies one or more restrictions to the query result.
         * Replaces any previously specified restrictions, if any.
         *
         * ```php
         * $user = QueryBuilder::table('user')->where('id', 1);
         * $users = QueryBuilder::table('user')->where('id', '>', 1);
         * $users = QueryBuilder::table('user')->where(['id' => '1', 'username' => 'twin']);
         * $users = QueryBuilder::table('user')->where(['id' => ['1', '2', '3']]);
         * ```
         *
         * @param array|Closure|string|null $column
         * @param mixed|null $operator
         * @param mixed|null $value
         * @return $this
         * @see BannerModel::where
         */
        public function where($column = null, $operator = null, $value = null): self
        {
        }

        /**
         * @param string $expression
         * @param mixed $params
         * @return $this
         * @see BannerModel::whereRaw
         */
        public function whereRaw($expression, $params = null): self
        {
        }

        /**
         * @param mixed $column
         * @param mixed $value
         * @return $this
         * @see BannerModel::whereNot
         */
        public function whereNot($column, $value): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see BannerModel::whereBetween
         */
        public function whereBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see BannerModel::whereNotBetween
         */
        public function whereNotBetween(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see BannerModel::whereIn
         */
        public function whereIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @param array $params
         * @return $this
         * @see BannerModel::whereNotIn
         */
        public function whereNotIn(string $column, array $params): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see BannerModel::whereNull
         */
        public function whereNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @return $this
         * @see BannerModel::whereNotNull
         */
        public function whereNotNull(string $column): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see BannerModel::whereDate
         */
        public function whereDate(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see BannerModel::whereMonth
         */
        public function whereMonth(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see BannerModel::whereDay
         */
        public function whereDay(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see BannerModel::whereYear
         */
        public function whereYear(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrValue
         * @param mixed|null $value
         * @return $this
         * @see BannerModel::whereTime
         */
        public function whereTime(string $column, $opOrValue, $value = null): self
        {
        }

        /**
         * @param string $column
         * @param mixed $opOrColumn2
         * @param mixed|null $column2
         * @return $this
         * @see BannerModel::whereColumn
         */
        public function whereColumn(string $column, $opOrColumn2, $column2 = null): self
        {
        }

        /**
         * 搜索字段是否包含某个值
         *
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see BannerModel::whereContains
         */
        public function whereContains(string $column, $value, string $condition = 'AND'): self
        {
        }

        /**
         * @param string $column
         * @param mixed $value
         * @param string $condition
         * @return $this
         * @see BannerModel::whereNotContains
         */
        public function whereNotContains(string $column, $value, string $condition = 'OR'): self
        {
        }

        /**
         * Search whether a column has a value other than the default value
         *
         * @param string $column
         * @param bool $has
         * @return $this
         * @see BannerModel::whereHas
         */
        public function whereHas(string $column, bool $has = true): self
        {
        }

        /**
         * @param mixed $if
         * @param mixed ...$args
         * @return $this
         * @see BannerModel::whereIf
         */
        public function whereIf($if, ...$args): self
        {
        }

        /**
         * Search whether a column dont have a value other than the default value
         *
         * @param string $column
         * @return $this
         * @see BannerModel::whereNotHas
         */
        public function whereNotHas(string $column): self
        {
        }

        /**
         * Specifies a grouping over the results of the query.
         * Replaces any previously specified groupings, if any.
         *
         * @param mixed $column the grouping column
         * @return $this
         * @see BannerModel::groupBy
         */
        public function groupBy($column): self
        {
        }

        /**
         * Specifies a restriction over the groups of the query.
         * Replaces any previous having restrictions, if any.
         *
         * @param mixed $column
         * @param mixed $operator
         * @param mixed|null $value
         * @param mixed $condition
         * @return $this
         * @see BannerModel::having
         */
        public function having($column, $operator, $value = null, $condition = 'AND'): self
        {
        }

        /**
         * Specifies an ordering for the query results.
         * Replaces any previously specified orderings, if any.
         *
         * @param string|Raw $column the ordering expression
         * @param string $order the ordering direction
         * @return $this
         * @see BannerModel::orderBy
         */
        public function orderBy($column, $order = 'ASC'): self
        {
        }

        /**
         * @param string $expression
         * @return $this
         * @see BannerModel::orderByRaw
         */
        public function orderByRaw($expression): self
        {
        }

        /**
         * Adds a DESC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see BannerModel::desc
         */
        public function desc(string $field): self
        {
        }

        /**
         * Add an ASC ordering to the query
         *
         * @param string $field The name of field
         * @return $this
         * @see BannerModel::asc
         */
        public function asc(string $field): self
        {
        }

        /**
         * @return $this
         * @see BannerModel::forUpdate
         */
        public function forUpdate(): self
        {
        }

        /**
         * @return $this
         * @see BannerModel::forShare
         */
        public function forShare(): self
        {
        }

        /**
         * @param string|bool $lock
         * @return $this
         * @see BannerModel::lock
         */
        public function lock($lock): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see BannerModel::when
         */
        public function when($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param mixed $value
         * @param callable $callback
         * @param callable|null $default
         * @return $this
         * @see BannerModel::unless
         */
        public function unless($value, callable $callback, callable $default = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see BannerModel::setDbKeyConverter
         */
        public function setDbKeyConverter(callable $converter = null): self
        {
        }

        /**
         * @param callable|null $converter
         * @return $this
         * @see BannerModel::setPhpKeyConverter
         */
        public function setPhpKeyConverter(callable $converter = null): self
        {
        }

        /**
         * Add a (inner) join base on the relation to the query
         *
         * @param string|array $name
         * @param string $type
         * @return $this
         * @see BannerModel::joinRelation
         */
        public function joinRelation($name, string $type = 'INNER'): self
        {
        }

        /**
         * Add a inner join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see BannerModel::innerJoinRelation
         */
        public function innerJoinRelation($name): self
        {
        }

        /**
         * Add a left join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see BannerModel::leftJoinRelation
         */
        public function leftJoinRelation($name): self
        {
        }

        /**
         * Add a right join base on the relation to the query
         *
         * @param string|array $name
         * @return $this
         * @see BannerModel::rightJoinRelation
         */
        public function rightJoinRelation($name): self
        {
        }

        /**
         * Check if the model method defines the "Relation" attribute (or the "@Relation" tag in doc comment)
         *
         * This method only checks whether the specified method has the "Relation" attribute,
         * and does not check the actual logic.
         * It is provided for external use to avoid directly calling `$this->$relation()` to cause attacks.
         *
         * @param string $method
         * @return bool
         * @see BannerModel::isRelation
         */
        public function isRelation(string $method): bool
        {
        }

        /**
         * Really remove the record from database
         *
         * @param int|string $id
         * @return $this
         * @see BannerModel::reallyDestroy
         */
        public function reallyDestroy($id = null): self
        {
        }

        /**
         * Add a query to filter soft deleted records
         *
         * @return $this
         * @see BannerModel::withoutDeleted
         */
        public function withoutDeleted(): self
        {
        }

        /**
         * Add a query to return only deleted records
         *
         * @return $this
         * @see BannerModel::onlyDeleted
         */
        public function onlyDeleted(): self
        {
        }

        /**
         * Remove "withoutDeleted" in the query, expect to return all records
         *
         * @return $this
         * @see BannerModel::withDeleted
         */
        public function withDeleted(): self
        {
        }

        /**
         * Add a query to return only purged records
         *
         * @return $this
         * @see BannerModel::onlyPurged
         */
        public function onlyPurged(): self
        {
        }
    }
}
