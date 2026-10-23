import { AuConveyancingFeeIndexEntityBase } from '../AuConveyancingFeeIndexEntityBase';
import type { AuConveyancingFeeIndexSDK } from '../AuConveyancingFeeIndexSDK';
import type { Control } from '../types';
import type { Mcp, McpLoadMatch, McpCreateData } from '../AuConveyancingFeeIndexTypes';
declare class McpEntity extends AuConveyancingFeeIndexEntityBase<Mcp> {
    constructor(client: AuConveyancingFeeIndexSDK, entopts: any);
    make(this: McpEntity): McpEntity;
    load(this: any, reqmatch?: McpLoadMatch, ctrl?: Control): Promise<McpEntity>;
    create(this: any, reqdata?: McpCreateData, ctrl?: Control): Promise<McpEntity>;
}
export { McpEntity };
