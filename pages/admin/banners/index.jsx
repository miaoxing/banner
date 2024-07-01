import { CTableDeleteLink, Table, TableActions, TableProvider, TableStatusCheckbox, useTable } from '@mxjs/a-table';
import { CEditLink, CNewBtn } from '@mxjs/a-clink';
import { Page, PageActions } from '@mxjs/a-page';
import { Image } from 'antd';
import { SearchForm, SearchItem } from '@mxjs/a-form';
import { ListBtn } from '@mxjs/a-button';
import { Select } from '@miaoxing/admin';
import $ from 'miaoxing';

const Index = () => {
  const [table] = useTable();

  return (
    <Page>
      <TableProvider>
        <PageActions>
          <CNewBtn/>
          <ListBtn to={$.url('admin/banner-categories')}>分类管理</ListBtn>
        </PageActions>

        <SearchForm>
          <SearchItem label="所属分类" name={['search', 'categoryId']} initialValue="">
            <Select url="banner-categories" labelKey="name" valueKey="id" all/>
          </SearchItem>
        </SearchForm>

        <Table
          tableApi={table}
          columns={[
            {
              title: '所属分类',
              dataIndex: ['category', 'name'],
            },
            {
              title: '图片',
              dataIndex: 'image',
              render: (image) => (
                <Image height={54} style={{maxWidth: 300}} src={image}/>
              ),
            },
            {
              title: '标题',
              dataIndex: 'title',
            },
            {
              title: '显示时间',
              dataIndex: 'startAt',
              render: (value, row) => {
                if (row.startAt && row.endAt) {
                  return row.startAt + ' 至 ' + row.endAt;
                }
                if (row.startAt) {
                  return row.startAt + ' 开始';
                }
                if (row.endAt) {
                  return row.endAt + ' 结束';
                }
                return '-';
              },
            },
            {
              title: '顺序',
              dataIndex: 'sort',
              sorter: true,
            },
            {
              title: '修改时间',
              dataIndex: 'updatedAt',
            },
            {
              title: '启用',
              dataIndex: 'isEnabled',
              render: (cell, row) => (
                <TableStatusCheckbox row={row} name="isEnabled"/>
              ),
            },
            {
              title: '操作',
              dataIndex: 'id',
              render: (id) => (
                <TableActions>
                  <CEditLink id={id}/>
                  <CTableDeleteLink id={id}/>
                </TableActions>
              ),
            },
          ]}
        />
      </TableProvider>
    </Page>
  );
};

export default Index;
