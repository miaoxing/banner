import { CTableDeleteLink, Table, TableProvider, useTable } from '@mxjs/a-table';
import { CEditLink, CNewBtn } from '@mxjs/a-clink';
import { Page, PageActions } from '@mxjs/a-page';
import { LinkActions } from '@mxjs/actions';

const Index = () => {
  const [table] = useTable();

  return (
    <Page>
      <TableProvider>
        <PageActions>
          <CNewBtn/>
        </PageActions>

        <Table
          tableApi={table}
          columns={[
            {
              title: '名称',
              dataIndex: 'name',
            },
            {
              title: '标识',
              dataIndex: 'code',
            },
            {
              title: '修改时间',
              dataIndex: 'updatedAt',
            },
            {
              title: '操作',
              dataIndex: 'id',
              render: (id, item) => (
                <LinkActions>
                  <CEditLink id={id}/>
                  {!item.isBuiltIn && <CTableDeleteLink id={id}/>}
                </LinkActions>
              ),
            },
          ]}
        />
      </TableProvider>
    </Page>
  );
};

export default Index;
